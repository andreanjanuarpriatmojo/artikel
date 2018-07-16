<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Karapan</title>

        <!--    Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">

        <!--Fontawesom-->
        <link rel="stylesheet" href="{{url('artikel/css/font-awesome.min.css')}}">

        <!--Animated CSS-->
        <link rel="stylesheet" type="text/css" href="{{url('artikel/css/animate.min.css')}}">

        <!-- Bootstrap -->
        <link href="{{url('artikel/css/bootstrap.min.css')}}" rel="stylesheet">
        <!--Bootstrap Carousel-->
        <link type="text/css" rel="stylesheet" href="{{url('artikel/css/carousel.css')}}')}}" />

        <link rel="stylesheet" href="{{url('artikel/css/isotope/style.css')}}">

        <!--Main Stylesheet-->
        <link href="{{url('artikel/css/style.css')}}" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="{{url('artikel/css/responsive.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body data-spy="scroll" data-target="#header">

        <!--Start Hedaer Section-->
        <section id="header">
            <div class="header-area">
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <a class="navbar-brand custom_navbar-brand" href="{{url('blog')}}"><img src="{{url('artikel/img/Logo Karapan.png')}}" alt=""></a>
                    </div>
                    <!--End of container-->
                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Hedaer Section-->

        @yield('content')

        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <p> Karapan.id </p>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="{{url('artikel/js/jquery-1.12.3.min.js')}}"></script>

        <!--Counter UP Waypoint-->
        <script src="{{url('artikel/js/waypoints.min.js')}}"></script>
        <!--Counter UP-->
        <script src="{{url('artikel/js/jquery.counterup.min.js')}}"></script>

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Isotope-->
        <script src="{{url('artikel/js/isotope/min/scripts-min.js')}}"></script>
        <script src="{{url('artikel/js/isotope/cells-by-row.js')}}"></script>
        <script src="{{url('artikel/js/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{url('artikel/js/isotope/packery-mode.pkgd.min.js')}}"></script>
        <script src="{{url('artikel/js/isotope/scripts.js')}}"></script>

        <!--JQuery Click to Scroll down with Menu-->
        <script src="{{url('artikel/js/jquery.localScroll.min.js')}}"></script>
        <script src="{{url('artikel/js/jquery.scrollTo.min.js')}}"></script>
        <!--WOW With Animation-->
        <script src="{{url('artikel/js/wow.min.js')}}"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{url('artikel/js/bootstrap.min.js')}}"></script>
        <!-- Custom JavaScript-->
        <script src="{{url('artikel/js/main.js')}}"></script>
    </body>

</html>