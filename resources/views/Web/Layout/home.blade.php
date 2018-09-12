<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xử lý ảnh Y Tế</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->

    <link rel="stylesheet" href="{{asset('css/web/adminlte.min.css')}}">
    {{--<link rel="stylesheet" href="{{asset('css/app.css')}}">--}}
    <!-- Google Font: Source Sans Pro -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    @include('Web.Share.navbar')
    <!-- /.navbar -->
    @include('Web.Share.aside')
    <!-- Main Sidebar Container -->
    <div class="content-wrapper">
        @yield('content')
    </div>

    @include('Web.Share.footer')

</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/web/adminlte.js')}}"></script>
</body>
</html>
