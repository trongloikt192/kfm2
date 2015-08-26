@extends('admincp.layouts_admincp.master')

@section('title')
    Liên kết
@stop

@section('content')

    <button href="#modal_a_item" data-toggle="modal" class="btn btn-default"><i class="fa fa-plus"></i> Thêm mới</button>

    <div class="fluid">
        
        <div class="widget grid12">
            <div class="widget-header">
                <div class="widget-title">
                    {{-- <i class="fa fa-pencil"></i> Simple Inputs --}}
                </div>
                <div class="widget-controls">
                    {{-- <div class="badge msg-badge">34</div> --}}
                </div>
            </div> <!-- /widget-header -->
            
            <div class="widget-content pad20f">

                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>Tên liên kết</th>
                            <th>Địa chỉ</th>
                            <th>Mô tả</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($links as $link)
                            <tr>
                                <td>{{ $link->name }}</td>
                                <td>{{ $link->link }}</td>
                                <td>{{ $link->description }}</td>
                                <td class="center">
                                    <a class="btnEdit_item" data-toggle="modal" href='#modal_e_item' data-id="{{ $link->id }}">
                                        <i class="fa fa-edit done"></i> 
                                        <i class="fa fa-spin fa-refresh loading"></i>
                                        Sửa
                                    </a> | 
                                    <a class="btnDel_item" href='javascript:;;' data-id="{{ $link->id }}">
                                        <i class="fa fa-remove done"></i> 
                                        <i class="fa fa-spin fa-refresh loading"></i>
                                        Xóa
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Tên liên kết</th>
                            <th>Địa chỉ</th>
                            <th>Mô tả</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
                
            </div> <!-- /widget-content -->


            

        </div> <!-- /widget -->
    </div>
@stop

@section('modal')
    <div class="modal fade" id="modal_a_item">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Thêm liên kết</h4>
                </div>

                {{ Form::open(['route'=> ['admincp.b10.store'], 'method' => 'POST', 'id'=> 'form_a_item']) }}
                <div class="modal-body">
                    <p>
                        Xin quý khách vui lòng nhập vào tên đăng nhập và địa chỉ email để lấy lại mật khẩu.
                    </p>

                    {{ Form::errorField() }}
                    {{ Form::textField('name', 'Tên liên kết', null) }}
                    {{ Form::textField('link', 'Địa chỉ', null) }}
                    {{ Form::textField('description', 'Mô tả', null) }}
                </div>
                <div class="modal-footer">
                    {{ Form::btnSubmit('Thêm') }}
                    <button type="reset" class="btn btn-green">Làm mới</button>
                    <button type="button" class="btn btn-red" data-dismiss="modal">Hủy</button>
                </div>
                {{ Form::close() }}

            </div>
        </div>
    </div><!-- /modal add New -->

    <div class="modal fade" id="modal_e_item">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Sửa thông tin liên kết</h4>
                </div>

                {{ Form::open(['route'=> ['admincp.b10.update'], 'method' => 'PUT', 'id'=> 'form_e_item']) }}
                <div class="modal-body">
                    <p>
                        Xin quý khách vui lòng nhập vào tên đăng nhập và địa chỉ email để lấy lại mật khẩu.
                    </p>

                    {{ Form::errorField() }}
                    {{ Form::hidden('id') }}
                    {{ Form::textField('name', 'Tên liên kết', null) }}
                    {{ Form::textField('link', 'Địa chỉ', null) }}
                    {{ Form::textField('description', 'Mô tả', null) }}
                </div>
                <div class="modal-footer">
                    {{ Form::btnSubmit('Cập nhật') }}
                    <button type="button" class="btn btn-red" data-dismiss="modal">Hủy</button>
                </div>
                {{ Form::close() }}

            </div>
        </div>
    </div><!-- /modal Edit -->

@stop


@section('scripts')
    <script type="text/javascript">

        var dataTable;
        var form_a_item = $('#form_a_item');
        var form_e_item = $('#form_e_item');
        var btnEdit_item = $('.btnEdit_item');
        var btnDel_item = $('.btnDel_item');
        var modal_a_item = $('#modal_a_item');
        var modal_e_item = $('#modal_e_item');

        function installTable() {
            // Data Tables
            if( $.fn.dataTable ) {
                dataTable = $("#datatable").dataTable({
                    sPaginationType: "full_numbers",
                });
            }
        }

        function xhrGetOM_detail_item() {
            btnEdit_item.click(function(e) {
                e.preventDefault();

                var id = $(this).attr('data-id');

                var url = "{{ route('admincp.b10.edit') }}";
                var method = 'GET';
                var data = {'id' : id};
                var isSuccess = false;
                var loading = $(this).find('.loading');
                var done = $(this).find('.done');

                $.ajax({
                    url : url,
                    type: method,
                    data: data,
                    dataType: 'json',
                    beforeSend: function() {
                        loading.fadeIn();
                        done.hide();
                        btnEdit_item.prop('disabled', true);
                    },
                    success: function( json ) {
                        $('input[name=id]', form_e_item).val(json['id']);
                        $('input[name=name]', form_e_item).val(json['name']);
                        $('input[name=link]', form_e_item).val(json['link']);
                        $('input[name=description]', form_e_item).val(json['description']);

                        isSuccess = true;
                    },
                    complete: function() {
                        loading.hide();
                        done.show();
                        btnEdit_item.prop('disabled', false);

                        if(isSuccess) {
                            modal_e_item.modal("show");
                        } else {
                            toastr.error( "Error" , "Notifications" );
                        }
                    }
                }); 
            });
        }

        function xhrInsert_item() {
            form_a_item.submit(function(e) {
                e.preventDefault();

                var form = $(this);

                var url = form.attr('action');
                var method = 'POST';
                var data = form.serialize();
                var isSuccess = false;
                var loading = $(this).find('.loading');
                var done = $(this).find('.done');
                var errorField = $(this).find('.errors');
                var btnSubmit = form.find('.btnSubmit');

                $.confirm({
                    title: '',
                    content: 'Bạn đồng ý <b>thêm</b> thông tin này không ?',
                    keyboardEnabled: true,
                    columnClass: 'col-md-4 col-md-offset-4',
                    animationSpeed: 200, // 0.2 seconds
                    confirm: function(){
                        $.ajax({
                            url : url,
                            type: method,
                            data: data,
                            dataType: 'json',
                            beforeSend: function() {
                                loading.fadeIn();
                                done.hide();
                                btnSubmit.prop('disabled', true);
                                errorField.html('');
                            },
                            success: function( json ) {

                                isSuccess = true;
                                form[0].reset(); //clear form
                                
                            },
                            error :function( jqXhr ) {
                                if( jqXhr.status === 401 )  //redirect if not authenticated user.
                                    $( location ).prop( 'pathname', 'auth/login' );
                                else {
                                    //process validation errors here.
                                    var errors = jqXhr.responseJSON; //this will get the errors response data.
                                    //show them somewhere in the markup
                                    //e.g
                                    var errorsHtml = '<div class="alert alert-danger"><ul class="list-unstyled">';

                                    $.each( errors , function( key, value ) {
                                        errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.

                                    });
                                    errorsHtml += '</ul></di>';

                                    errorField.html( errorsHtml );
                                }
                            },
                            complete: function() {
                                loading.hide();
                                done.show();
                                btnSubmit.prop('disabled', false); //enable button

                                if(isSuccess) {
                                    toastr.success( "Success" , "Notifications" );
                                    modal_e_item.modal('hide');
                                    xhrRefresh();
                                } else {
                                    toastr.error( "Error" , "Notifications" );
                                }
                            }
                        }); 
                    }
                });
                               
            });
        }

        function xhrUpdate_item() {
            form_e_item.submit(function(e) {
                e.preventDefault();

                var form = $(this);

                var url = form.attr('action');
                var method = 'PUT';
                var data = form.serialize();
                var isSuccess = false;
                var loading = $(this).find('.loading');
                var done = $(this).find('.done');
                var errorField = $(this).find('.errors');
                var btnSubmit = form.find('.btnSubmit');

                $.confirm({
                    title: '',
                    content: 'Bạn đồng ý <b>sửa</b> thông tin này không ?',
                    keyboardEnabled: true,
                    columnClass: 'col-md-4 col-md-offset-4',
                    animationSpeed: 200, // 0.2 seconds
                    confirm: function(){
                        $.ajax({
                            url : url,
                            type: method,
                            data: data,
                            dataType: 'json',
                            beforeSend: function() {
                                loading.fadeIn();
                                done.hide();
                                btnSubmit.prop('disabled', true);
                                errorField.html('');
                            },
                            success: function( json ) {

                                isSuccess = true;
                                form[0].reset(); //clear form
                                
                            },
                            error :function( jqXhr ) {
                                if( jqXhr.status === 401 )  //redirect if not authenticated user.
                                    $( location ).prop( 'pathname', 'auth/login' );
                                else {
                                    //process validation errors here.
                                    var errors = jqXhr.responseJSON; //this will get the errors response data.
                                    //show them somewhere in the markup
                                    //e.g
                                    var errorsHtml = '<div class="alert alert-danger"><ul class="list-unstyled">';

                                    $.each( errors , function( key, value ) {
                                        errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.

                                    });
                                    errorsHtml += '</ul></di>';

                                    errorField.html( errorsHtml );
                                }
                            },
                            complete: function() {
                                loading.hide();
                                done.show();
                                btnSubmit.prop('disabled', false); //enable button

                                if(isSuccess) {
                                    toastr.success( "Success" , "Notifications" );
                                    modal_e_item.modal('hide');
                                    xhrRefresh();
                                } else {
                                    toastr.error( "Error" , "Notifications" );
                                }
                            }
                        }); 
                    }
                });
                               
            });
        }



        function xhrDelete_item() {
            btnDel_item.click(function(e) {
                e.preventDefault();

                var btnDel = $(this);

                var id = $(this).attr('data-id');
                var url = "{{ route('admincp.b10.destroy') }}";
                var method = 'DELETE';
                var data = {'id' : id};
                var isSuccess = false;
                var loading = $(this).find('.loading');
                var done = $(this).find('.done');

                $.confirm({
                    title: '',
                    content: 'Bạn có chắc là sẽ <b>xóa</b> thông tin này không ?',
                    keyboardEnabled: true,
                    columnClass: 'col-md-4 col-md-offset-4',
                    animationSpeed: 200, // 0.2 seconds
                    confirm: function(){
                        $.ajax({
                            url : url,
                            type: method,
                            data: data,
                            dataType: 'json',
                            beforeSend: function() {
                                loading.fadeIn();
                                done.hide();
                                btnDel.prop('disabled', true);
                            },
                            success: function( json )
                            {       
                                isSuccess = true;
                            },
                            complete: function() {
                                loading.hide();
                                done.show();
                                btnDel.prop('disabled', false); //enable button

                                if(isSuccess) {
                                    toastr.success( "Success" , "Notifications" );
                                    xhrRefresh();
                                } else {
                                    toastr.error( "Error" , "Notifications" );
                                }
                            }
                        }); 
                    }
                });
                
            });
        }


        function GetOM() {
            modal_a_item.on('shown.bs.modal', function() {
                $('input:visible:first', form_a_item).focus();
                $('.errors', form_a_item).html('');
            });


            modal_e_item.on('shown.bs.modal', function() {
                $('input:visible:first', form_e_item).focus();
                form_e_item.find('.errors').html('');
            });
        }

        function xhrRefresh() {
            setTimeout(function() {
                window.location.reload();
            }, 1000);
        }

        $(document).ready(function() {
            installTable();
            GetOM();
            xhrGetOM_detail_item();
            xhrInsert_item();
            xhrUpdate_item();
            xhrDelete_item();
        });
    </script>

@stop