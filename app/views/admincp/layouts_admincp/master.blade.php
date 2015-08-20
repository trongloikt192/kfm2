<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>KFM | @yield('header-title')</title>
        <meta name="description" content="" />
        <meta name="author" content="" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0" />

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="" />
        <link rel="apple-touch-icon" href="" />

        {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/simplex/bootstrap.min.css') }}
        {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/css/bootstrap-select.min.css') }}
        {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker.min.css') }}
        {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css') }}
        {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css') }}
        {{ HTML::style('kfm.css') }}
        
        @yield('styles')
    </head>

    <body>
        <div>
            
        </div>
        <footer>
        
        </footer>
    </body>
    <!-- JavaScript required for CMS-->
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/js/bootstrap-select.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/locales/bootstrap-datepicker.vi.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js') }}
    {{ HTML::script('http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAgrj58PbXr2YriiRDqbnL1RSqrCjdkglBijPNIIYrqkVvD1R4QxRl47Yh2D_0C1l5KXQJGrbkSDvXFA') }}
   
    <script type="text/javascript">
        // Active menu  
        $(function() {
            var pgurl = window.location.href.substr( window.location.href.lastIndexOf("/") + 1 );
            $("#nav1 li a").each(function(){
                var href = $(this).attr("href");
                var ctr = href.substr( href.lastIndexOf("/") + 1 ) ;
                if(ctr == pgurl || ctr == '' ) 
                    $(this).parent().addClass("on");
            });
        });
    </script>

    @yield('scripts')
</html>