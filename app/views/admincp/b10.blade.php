@extends('admincp.layouts_admincp.master')

@section('title')
    Liên kết
@stop

@section('content')

    <button href="#modal-addNew" data-toggle="modal" class="btn btn-default"><i class="fa fa-plus"></i> Thêm mới</button>

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
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                 Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td class="center">
                                <a data-toggle="modal" href='#modal-edit' class="">
                                    <i class="fa fa-edit"></i> Sửa
                                </a> | 
                                <a data-toggle="modal" href='#modal-delete' class="">
                                    <i class="fa fa-remove"></i> Xóa
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                 Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td class="center">C</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                 Explorer 5.5</td>
                            <td>Win 95+</td>
                            <td class="center">A</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                 Explorer 6</td>
                            <td>Win 98+</td>
                            <td class="center">A</td>
                        </tr>
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
    <div class="modal fade" id="modal-addNew">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Thêm liên kết</h4>
                </div>
                <div class="modal-body">
                    {{ Form::model(['route'=> ['admincp.api.b01.update'], 'method' => 'POST']) }}
                        <p>
                            Xin quý khách vui lòng nhập vào tên đăng nhập và địa chỉ email để lấy lại mật khẩu.
                        </p>
                        <div class="form-group">
                            <label for="firstname" class="col-sm-3 control-label">Tên liên kết</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="firstname">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-sm-3 control-label">Địa chỉ</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="lastname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Mô tả</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="username">
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-black">Thêm</button>
                    <button type="button" class="btn btn-red" data-dismiss="modal">Hủy</button>
                </div>
            </div>
        </div>
    </div><!-- /modal add New -->

    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Sửa thông tin liên kết</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <p>
                            Xin quý khách vui lòng nhập vào tên đăng nhập và địa chỉ email để lấy lại mật khẩu.
                        </p>
                        <div class="form-group">
                            <label for="firstname" class="col-sm-3 control-label">Tên liên kết</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="firstname">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-sm-3 control-label">Địa chỉ</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="lastname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Mô tả</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="username">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-black">Đồng ý</button>
                    <button type="button" class="btn btn-red" data-dismiss="modal">Hủy</button>
                </div>
            </div>
        </div>
    </div><!-- /modal Edit -->

    <div class="modal fade" id="modal-delete">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    Bạn có chắc là sẽ xóa thông tin này không ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-black">Đồng ý</button>
                    <button type="button" class="btn btn-red" data-dismiss="modal">Hủy</button>
                </div>
            </div>
        </div>
    </div><!-- /modal Remove -->

@stop


@section('scripts')
    <script type="text/javascript">
        
    </script>

@stop