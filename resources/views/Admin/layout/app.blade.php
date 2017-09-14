<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="admin/css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="admin/css/fullcalendar.css">
    <link href="admin/css/widgets.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <link href="admin/css/style-responsive.css" rel="stylesheet" />
    <link href="admin/css/xcharts.min.css" rel=" stylesheet">
    <link href="admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

</head>
<body>
<!-- container section start -->
<section id="container" class="">
  @include('admin.partial.header.header')
  @include('admin.partial.sidebar.sidebar')
  @yield('content')


</section>

<!-- javascripts -->
<script src="{{ url('admin/js/jquery.js') }}"></script>
<script src="{{ url('admin/js/jquery-ui-1.10.4.min.js') }}"></script>
<script src="{{ url('admin/js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ url('admin/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ url('admin/js/bootstrap.min.js') }}"></script>
<!-- nice scroll -->
<script src="{{ url('admin/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ url('admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<!-- charts scripts -->
<script src="{{ url('admin/assets/jquery-knob/js/jquery.knob.js') }}"></script>
<script src="{{ url('admin/js/jquery.sparkline.js') }}" type="text/javascript"></script>
<script src="{{ url('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ url('admin/js/owl.carousel.js') }}" ></script>
<!-- jQuery full calendar -->
<<script src="{{ url('admin/js/fullcalendar.min.js') }}"></script> <!-- Full Google Calendar - Calendar -->
<script src="{{ url('admin/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
<!--script for this page only-->
<script src="{{ url('admin/js/calendar-custom.js') }}"></script>
<script src="{{ url('admin/js/jquery.rateit.min.js') }}"></script>
<!-- custom select -->
<script src="{{ url('admin/js/jquery.customSelect.min.js') }}" ></script>
<script src="{{ url('admin/assets/chart-master/Chart.js') }}"></script>

<!--custome script for all page-->
<script src="{{ url('admin/js/scripts.js') }}"></script>
<!-- custom script for this page-->
<script src="{{ url('admin/js/sparkline-chart.js') }}"></script>
<script src="{{ url('admin/js/easy-pie-chart.js') }}"></script>
<script src="{{ url('admin/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ url('admin/js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ url('admin/js/xcharts.min.js') }}"></script>
<script src="{{ url('admin/js/jquery.autosize.min.js') }}"></script>
<script src="{{ url('admin/js/jquery.placeholder.min.js') }}"></script>
<script src="{{ url('admin/js/gdp-data.js') }}"></script>
<script src="{{ url('admin/js/morris.min.js') }}"></script>
<script src="{{ url('admin/js/sparklines.js') }}"></script>
<script src="{{ url('admin/js/charts.js') }}"></script>
<script src="{{ url('admin/js/jquery.slimscroll.min.js') }}">

</script>

</body>
</html>























