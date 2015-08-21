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

        {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/simplex/bootstrap.min.css') }}
        {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css') }}
        {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css') }}
        {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.2/toastr.min.css') }}
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
                    
                    <h1 class="page-title">Dashboard</h1>
                    <div class="stats">
                        <div class="stat" id="st-visits">
                            <div class="st-chart">
                                <span id="stats_visits" values="80,20"></span><br>
                                80%
                            </div>
                            <div class="st-detail">
                                28549<br><span>Visits</span>
                            </div>
                        </div> <!-- /stat -->
                        <div class="stat" id="st-users">
                            <div class="st-chart">
                                <span id="stats_users" values="50,50"></span><br>
                                50%
                            </div>
                            <div class="st-detail">
                                1278<br><span>Users</span>
                            </div>
                        </div> <!-- /stat -->
                        <div class="stat" id="st-orders">
                            <div class="st-chart">
                                <span id="stats_orders" values="65,35"></span><br>
                                65%
                            </div>
                            <div class="st-detail">
                                28549<br><span>Orders</span>
                            </div>
                        </div> <!-- /stat -->
                        <button class="btn btn-green"><i class="fa fa-refresh"></i> Update</button>
                    </div> <!-- /stats -->

                </div> <!-- /header -->

                <div class="breadcrumbs">
                    <i class="fa fa-home"></i> Home <i class="fa fa-caret-right"></i> Dashboard
                </div>

                <div class="wrp clearfix">

                    

                    <div class="fluid">

                        <div class="widget grid6">
                            <div class="widget-header">
                                <div class="widget-title">
                                    <i class="fa fa-comments"></i> Recent Questions
                                </div>
                                <div class="widget-controls">
                                    <div class="badge msg-badge">34</div>
                                </div>
                            </div> <!-- /widget-header -->

                            <div class="comment">
                                <div class="img-comment vignette">
                                    <img src="{{asset('img/comment-1.jpg')}}">
                                </div>
                                <div class="comment-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...
                                    <br>
                                    <div class="comment-info">
                                        User: <span>Kyle</span> on IP: <span>172.10.56.3</span>
                                    </div>
                                    <div class="comment-controls">
                                        <button class="btn btn-mini btn-blue">Edit</button>
                                        <button class="btn btn-mini btn-green">Approve</button>
                                        <button class="btn btn-mini btn-black">Delete</button>
                                    </div>
                                </div>
                            </div> <!-- /comment -->

                            <hr>

                            <div class="comment">
                                <div class="img-comment vignette">
                                    <img src="{{asset('img/comment-2.jpg')}}">
                                </div>
                                <div class="comment-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...
                                    <br>
                                    <div class="comment-info">
                                        User: <span>John</span> on IP: <span>172.10.56.3</span>
                                    </div>
                                    <div class="comment-controls">
                                        <button class="btn btn-mini btn-blue">Edit</button>
                                        <button class="btn btn-mini btn-green">Approve</button>
                                        <button class="btn btn-mini btn-black">Delete</button>
                                    </div>
                                </div>
                            </div> <!-- /comment -->

                            <hr>

                            <div class="pag pag-mini">
                              <ul class="pagination">
                                <li class="disabled"><a href="#" onclick="return false;"><i class="fa fa-caret-left"></i></a></li>
                                <li class="active"><a href="#" onclick="return false;">1</a></li>
                                <li><a href="#" onclick="return false;">2</a></li>
                                <li><a href="#" onclick="return false;">3</a></li>
                                <li><a href="#" onclick="return false;">4</a></li>
                                <li><a href="#" onclick="return false;">5</a></li>
                                <li class="disabled period"><a href="#" onclick="return false;">...</a></li>
                                <li><a href="#" onclick="return false;">25</a></li>
                                <li><a href="#" onclick="return false;"><i class="fa fa-caret-right"></i></a></li>
                              </ul>
                              <button class="btn btn-blue">View All</button>
                            </div>

                        </div> <!-- /widget -->

                        <div class="widget grid6">
                            <div class="widget-header">
                                <div class="widget-title">
                                    <i class="fa fa-pencil"></i> Contact
                                </div>
                                <div class="widget-controls">
                                    <input type="checkbox" id="switch-form" />
                                </div>
                            </div> <!-- /widget-header -->
                            
                            <div class="widget-content clearauto">
                                <input type="text" placeholder="Email title">
                                <textarea placeholder="Content" ></textarea>
                                <button class="btn btn-blue pull-right" type="submit">Sent</button>
                            </div>

                        </div> <!-- /widget -->

                    </div> <!-- /fluid -->

                </div> <!-- /wrp -->

            </div> <!-- /content -->

            @include('admincp.layouts_admincp.footer')
            

        </div> <!-- /wrapper -->
    </body>
    <!-- JavaScript required for CMS-->
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/excanvas.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery-hashchange/v1.3/jquery.ba-hashchange.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery.easytabs/3.2.0/jquery.easytabs.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.2/toastr.min.js') }}
    
    <!-- Google Map API -->
    {{ HTML::script('http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAgrj58PbXr2YriiRDqbnL1RSqrCjdkglBijPNIIYrqkVvD1R4QxRl47Yh2D_0C1l5KXQJGrbkSDvXFA') }}
   
    <script type="text/javascript">

        $(window).load(function(){
            $('#loading').fadeOut(1000);

            toastr.options = {
              "closeButton": true,
              "debug": false,
              "positionClass": "toast-bottom-right",
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "5000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
            setTimeout(function(){
                toastr.info('<span style="color:#333;">Welcome to Liberator! The new clean Admin Template.</span>');    
            },2000) ;
            
            setTimeout(function(){
                toastr.warning('<span style="color:#333;">You could navigate the different sections to discover it...</span>'); 
            },4500) ;

        // $(document).ready(function(){

            $('.collapsible > a').click(function(){
                $(this).parent().toggleClass('open');
                if( $(this).parent().siblings().hasClass('open') ){
                    $(this).parent().siblings().removeClass('open');
                }
            return false;
            }) // Collapsible


            // -------------------------- SPARKLINE miniCHARTS -----------------------------//

            $("#stats_visits").sparkline('html',{
                type: 'pie',
                sliceColors: ['#499ac7','transparent'],
                offset:-90,
                tooltipClassname:'tooltip-sp',
                disableHighlight:true
            });
            $("#stats_users").sparkline('html',{
                type: 'pie',
                sliceColors: ['#37343b','transparent'],
                offset:-90,
                tooltipClassname:'tooltip-sp',
                disableHighlight:true 
            });
            $("#stats_orders").sparkline('html',{
                type: 'pie',
                sliceColors: ['#83a854','transparent'],
                offset:-90,
                tooltipClassname:'tooltip-sp',
                disableHighlight:true
            });

            
            // -------------------------- FLOT CHARTS -----------------------------//

            var sin = [], cos = [];
            for (var i = 0; i < 20; i += 0.5) {
                sin.push([i, Math.sin(i-1.5)]);
                cos.push([i, Math.cos(i+1.6)]);
            }

            var sin2 = [], cos2 = [];
            for (var i = 0; i < 40; i += 0.7) {
                sin2.push([i, Math.sin(i-0.23) - 0.1]);
                cos2.push([i, Math.cos(i+0.80)]);
            }

            var sin3 = [], cos3 = [];
            for (var i = 0; i < 74; i += 0.7) {
                sin3.push([i, Math.sin(i-0.23) - 0.1]);
                cos3.push([i, Math.cos(i+0.80)]);
            }

            // Chart Month
            var plot = $.plot($("#chart-month"),
                   [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
                       series: {
                           lines: { show: true },
                           points: { show: true }
                       },
                       grid: { hoverable: true, clickable: true },
                       yaxis: { min: -1.1, max: 1.1 },
                       xaxis: { min: 0, max: 14 },
                       legend: {
                            show: true,
                            // margin: number of pixels or [x margin, y margin]
                            //container: '.cLegend'
                            // sorted: null/false, true, "ascending", "descending", "reverse", or a comparator
                        },
                        colors: [ '#52aed3', '#83a854' ]
                     });

            // Chart Week
             var plot = $.plot($("#chart-week"),
                   [ { data: sin2, label: "sin(x)"}, { data: cos2, label: "cos(x)" } ], {
                       series: {
                           lines: { show: true },
                           points: { show: true }
                       },
                       grid: { hoverable: true, clickable: true },
                       yaxis: { min: -1.1, max: 1.1 },
                       xaxis: { min: 0, max: 14 },
                       legend: {
                            show: true,
                            // margin: number of pixels or [x margin, y margin]
                            //container: '.cLegend'
                            // sorted: null/false, true, "ascending", "descending", "reverse", or a comparator
                        },
                        colors: [ '#52aed3', '#83a854' ]
                     });

             // Chart Day
             var plot = $.plot($("#chart-day"),
                   [ { data: sin3, label: "sin(x)"}, { data: cos3, label: "cos(x)" } ], {
                       series: {
                           lines: { show: true },
                           points: { show: true }
                       },
                       grid: { hoverable: true, clickable: true },
                       yaxis: { min: -1.1, max: 1.1 },
                       xaxis: { min: 0, max: 74 },
                       legend: {
                            show: true,
                            // margin: number of pixels or [x margin, y margin]
                            //container: '.cLegend'
                            // sorted: null/false, true, "ascending", "descending", "reverse", or a comparator
                        },
                        colors: [ '#52aed3', '#83a854' ]
                     });


            function showTooltip(x, y, contents) {
                $('<div id="chart-tooltip" class="chart-tooltip">' + contents + '</div>').css( {
                    position: 'absolute',
                    display: 'none',
                    top: y + 5,
                    left: x + 5,
                    'z-index': '9999',
                    'color': '#fff',
                    'font-size': '11px',
                    opacity: 0.8
                }).appendTo("body").fadeIn(200);
            }

            var previousPoint = null;
            $(".chart").bind("plothover", function (event, pos, item) {
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));

                if ($(".chart").length > 0) {
                    if (item) {
                        if (previousPoint != item.dataIndex) {
                            previousPoint = item.dataIndex;
                            
                            $("#chart-tooltip").remove();
                            var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);
                            
                            showTooltip(item.pageX, item.pageY,
                                        item.series.label + " of " + x + " = " + y);
                        }
                    }
                    else {
                        $("#chart-tooltip").remove();
                        previousPoint = null;            
                    }
                }
            });

            $(".chart").bind("plotclick", function (event, pos, item) {
                if (item) {
                    $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
                    plot.highlight(item.series, item.datapoint);
                }
            });


            // -------------------------- jQueryUI SLIDERS -----------------------------//

            $('.slider').slider();

            $('.slider.range-min').slider({
                range: "min",
                slide: function( event, ui ) {
                    $('.slider.range-min > a.ui-slider-handle').html("<div class='range-tooltip'>$ " + ui.value + "</div>")
                  },
                stop: function( event, ui ) {
                    $('.range-tooltip').delay(1000).fadeOut();
                }
            });

            $('.slider.range-min').on( "slide", function( event, ui ) {
                if($(this).slider('value') > 5){
                    $('.slider.range-min > a.ui-slider-handle').addClass('color');
                } else {
                    $('.slider.range-min > a.ui-slider-handle').removeClass('color');
                }
            } );

            $('.slider.range').slider({
                range: true,
                max: 750,
                values: [ 75, 300 ],
                slide: function( event, ui ) {
                    var handleIndex = $(ui.handle).index(); // left:0 - right:2
                    if( handleIndex == 0 ){
                        $(ui.handle).html("<div class='range-tooltip'>$ " + ui.values[0] + "</div>");
                    } else if( handleIndex == 2 ){
                        $(ui.handle).html("<div class='range-tooltip'>$ " + ui.values[1] + "</div>");
                    }
                  },
                stop: function( event, ui ) {
                    $('.range-tooltip').delay(1000).fadeOut();
                }
            });

            // Iteration to set the default value of Vertical Sliders

            $('.slider.vertical').each(function(){
                $(this).slider({
                orientation: "vertical",
                  range: "min",
                  min: 0,
                  max: 100,
                  value: $(this).attr('data-vY')
                })  
            })
            
            $('.progressbar').each(function(){
                var v = parseInt($(this).attr('value'));
                $(this).progressbar({
                  value: v
                })
            })

            $('.progressbar > .ui-progressbar-value').hover(function(){
                $(this).html("<div class='progress-tooltip'>" + $(this).parent().progressbar('value') + " %</div>");
                $('.progress-tooltip').delay(2000).fadeOut()
            })

            // eTabs
            $('#eTabs').easytabs();

            // Mobile Nav
            $('.m-nav').click(function(){
                $('.main-nav').toggleClass('open');
            })

            // Quick Nav clicks
            $('.qn-arrow-left').click(function(){
                var sel = $('.quick-nav ul').find('.active');
                if( sel.hasClass('qn-first') ){
                    sel.removeClass('active');
                    sel.parent().find('.qn-last').addClass('active');
                } else {
                    sel.removeClass('active').prev().addClass('active');
                }
            })
            $('.qn-arrow-right').click(function(){
                var sel = $('.quick-nav ul').find('.active');
                if( sel.hasClass('qn-last') ){
                    sel.removeClass('active');
                    sel.parent().find('.qn-first').addClass('active');
                } else {
                    sel.removeClass('active').next().addClass('active');
                }
            })

            

        }) // Ready.
    </script>

    @yield('scripts')
</html>