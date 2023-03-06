<html>
<head>
   <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
   <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
   <link rel="stylesheet" href="{{asset('/css/owl.carousel.css')}}">
   <link rel="stylesheet" href="{{asset('/css/owl.theme.default.css')}}">
   <link rel="stylesheet" href="{{asset('/style.css')}}">
</head>
<body>
   
    @include('partials._navbar')
    @yield('content')
    @include("partials._footer")

    <div class="bg"></div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/index.js"></script>
 </body>

 </html>


