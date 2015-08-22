<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>KFM Control Panel | @yield('title')</title>
        <meta name="description" content="" />
        <meta name="author" content="" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0" />

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="" />
        <link rel="apple-touch-icon" href="" />

        {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css') }}
        {{-- {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css') }} --}}
        {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css') }}
        {{-- {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.2/toastr.min.css') }} --}}

        {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.8/css/dataTables.bootstrap.min.css') }}
        {{-- {{ HTML::style('https://cdn.datatables.net/select/1.0.0/css/select.bootstrap.min.css') }} --}}

        {{ HTML::style('css/style.css') }}
        
        @yield('styles')
    </head>

    <body>
        <div id="loading">
            <div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <div id="wrapper">
            @include('admincp.layouts_admincp.navigation')


            @include('admincp.layouts_admincp.sidebar')
            

            <div id="content" class="clearfix">

                <div class="header">
                    
                    <h1 class="page-title">@yield('title')</h1>

                    <div class="stats">
                        <div class="stat" id="st-visits">
                            <div class="st-chart">
                                <span id="stats_visits" values="80,20"></span><br>
                                {{-- 80% --}}
                            </div>
                            <div class="st-detail">
                                28549<br><span>Lượt truy cập</span>
                            </div>
                        </div> <!-- /stat -->
                        <div class="stat" id="st-users">
                            <div class="st-chart">
                                <span id="stats_users" values="50,50"></span><br>
                                {{-- 50% --}}
                            </div>
                            <div class="st-detail">
                                1278<br><span>Người dùng</span>
                            </div>
                        </div> <!-- /stat -->
                        <div class="stat" id="st-orders">
                            <div class="st-chart">
                                <span id="stats_orders" values="65,35"></span><br>
                                {{-- 65% --}}
                            </div>
                            <div class="st-detail">
                                28549<br><span>Bài viết</span>
                            </div>
                        </div> <!-- /stat -->
                        {{-- <button class="btn btn-green"><i class="fa fa-refresh"></i> Update</button> --}}
                    </div> <!-- /stats -->

                </div> <!-- /header -->

                <div class="breadcrumbs">
                    <i class="fa fa-home"></i> Home <i class="fa fa-caret-right"></i> @yield('title')
                </div>

                <div class="wrp clearfix">
                    @yield('content')
                </div> <!-- /wrp -->

            </div> <!-- /content -->

            @include('admincp.layouts_admincp.footer')
            <!-- /footer -->

            @yield('modal')
            <!-- /modal -->

        </div> <!-- /wrapper -->
    </body>
    <!-- JavaScript required for CMS-->
    {{-- {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js') }} --}}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
    {{-- {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js') }} --}}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js') }}
    {{-- {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/excanvas.min.js') }} --}}
    {{-- {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js') }} --}}
    {{-- {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js') }} --}}
    {{-- {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js') }} --}}
    {{-- {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery-hashchange/v1.3/jquery.ba-hashchange.min.js') }} --}}
    {{-- {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery.easytabs/3.2.0/jquery.easytabs.min.js') }} --}}
    {{-- {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js') }} --}}
    {{-- {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.2/toastr.min.js') }} --}}

    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.8/js/jquery.dataTables.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.8/js/dataTables.bootstrap.min.js') }}
    {{-- {{ HTML::script('https://cdn.datatables.net/select/1.0.0/js/dataTables.select.min.js') }} --}}
    
    <!-- Google Map API -->
    {{ HTML::script('http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAgrj58PbXr2YriiRDqbnL1RSqrCjdkglBijPNIIYrqkVvD1R4QxRl47Yh2D_0C1l5KXQJGrbkSDvXFA') }}


    <script type="text/javascript">
        // Active menu  
        $(function() {
            var pgurl = window.location.href.substr( window.location.href.lastIndexOf("/") + 1 );
            $("#sidebar li a").each(function(){
                var href = $(this).attr("href");
                var ctr = href.substr( href.lastIndexOf("/") + 1 ) ;
                if(ctr == pgurl || ctr == '' ) 
                    $(this).parent().addClass("active");

                if(pgurl === "b03" || pgurl === "b11") {
                    $(this).parent().parent().parent().addClass("open");
                }
            });
        });

        $('.collapsible > a').click(function(){
            $(this).parent().toggleClass('open');
            if( $(this).parent().siblings().hasClass('open') ){
                $(this).parent().siblings().removeClass('open');
            }
        return false;
        }) // Collapsible
    </script>

   
    <script type="text/javascript">
        $(window).load(function(){
            $('#loading').fadeOut(1000);
        }) // Ready.
    </script>

    <script type="text/javascript">
        var table;

        ;(function( $, window, document, undefined ) {

            $(document).ready(function() {

                // Data Tables
                if( $.fn.dataTable ) {
                    table = $("#datatable").dataTable({
                        sPaginationType: "full_numbers"
                    });

                    $('#datatable tbody').on( 'click', 'tr', function () {
                        if ( $(this).hasClass('selected') ) {
                            $(this).removeClass('selected');
                        }
                        else {
                            table.$('tr.selected').removeClass('selected');
                            $(this).addClass('selected');
                        }
                    });
                }
            });

        }) (jQuery, window, document);
    </script>

    @yield('scripts')
</html>