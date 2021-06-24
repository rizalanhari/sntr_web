<!DOCTYPE html>
<!--
	Solitude by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-table.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/elusive-webfont.css') }}">
    <link href="{{asset('assets/css/animate.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>

    <script src="{{asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{asset('assets/js/bootstrap-table.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/modernizr.custom.js') }}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">


    @include('layout.nav')

    @yield('content')
    <div id="footerwrap">
        <div class="container">
            <div class="btt-wrapper fade-down"><a class="btt-link smoothScroll" href="#home"><i class="el-icon-chevron-up"></i></a></div>
            <ul id="footer-social" class="fade-down">
                <li><a href="#" target="_blank" title="Like Us"><i class="el-icon-twitter"></i></a></li>
                <li><a href="#" target="_blank" title="Like Us"><i class="el-icon-facebook"></i></a></li>
                <li><a href="#" target="_blank" title="Like Us"><i class="el-icon-googleplus"></i></a></li>
                <li><a href="#" target="_blank" title="Like Us"><i class="el-icon-flickr"></i></a></li>
                <li><a href="#" target="_blank" title="Like Us"><i class="el-icon-youtube"></i></a></li>
                <li><a href="#" target="_blank" title="Like Us"><i class="el-icon-rss"></i></a></li>
            </ul>
            <h4 class="fade-up">Created by <a href="http://templatestock.co">Template Stock</a> - Copyright 2016</h4>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Latest compiled and minified CSS -->
  
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/init.js') }}"></script>
</body>

</html>