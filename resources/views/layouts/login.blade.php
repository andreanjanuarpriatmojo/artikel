<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <!--<link rel="shortcut icon" href="img/favicon.png">-->

  <title>@yield('title')</title>

  <!-- Bootstrap CSS -->
  <link href="{{url('admn/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{url('admn/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{url('admn/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{url('admn/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{url('admn/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{url('admn/assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{url('admn/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{url('admn/css/owl.carousel.css')}}" type="text/css">
  <link href="{{url('admn/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{url('admn/css/fullcalendar.css')}}">
  <link href="{{url('admn/css/widgets.css')}}" rel="stylesheet">
  <link href="{{url('admn/css/style.css')}}" rel="stylesheet">
  <link href="{{url('admn/css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{url('admn/css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{url('admn/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">

      <!--logo start-->
      <a href="index.html" class="logo">Ad<span class="lite">min</span></a>
      <h4 style="text-align: right;margin-right: 2em;margin-top: 0.75em;color: white"><a style="color: white" class="btn btn-link" href="{{ route('register') }}">{{ __('Register') }}</a></h4>
      <!--logo end-->

    </header>
    <!--header end-->

    <!--main content start-->
    @yield('content')
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{url('admn/js/jquery.js')}}"></script>
  <script src="{{url('admn/js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{url('admn/js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{url('admn/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{url('admn/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{url('admn/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{url('admn/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{url('admn/assets/jquery-knob/js/jquery.knob.js')}}"></script>
  <script src="{{url('admn/js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{url('admn/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <script src="{{url('admn/js/owl.carousel.js')}}"></script>
  <!-- jQuery full calendar -->
  <script src="{{url('admn/js/fullcalendar.min.js')}}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{url('admn/assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{url('admn/js/calendar-custom.js')}}"></script>
    <script src="{{url('admn/js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{url('admn/js/jquery.customSelect.min.js')}}"></script>
    <script src="{{url('admn/assets/chart-master/Chart.js')}}"></script>

    <!--custome script for all page-->
    <script src="{{url('admn/js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{url('admn/js/sparkline-chart.js')}}"></script>
    <script src="{{url('admn/js/easy-pie-chart.js')}}"></script>
    <script src="{{url('admn/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{url('admn/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{url('admn/js/xcharts.min.js')}}"></script>
    <script src="{{url('admn/js/jquery.autosize.min.js')}}"></script>
    <script src="{{url('admn/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{url('admn/js/gdp-data.js')}}"></script>
    <script src="{{url('admn/js/morris.min.js')}}"></script>
    <script src="{{url('admn/js/sparklines.js')}}"></script>
    <script src="{{url('admn/js/charts.js')}}"></script>
    <script src="{{url('admn/js/jquery.slimscroll.min.js')}}"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
