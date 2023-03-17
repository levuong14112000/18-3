






<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/anima.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/respon.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
@include('admin.headeradmin')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2">
            @include('admin.leftadmin')
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10">
            @include('admin.teachers')
        </div>

    </div>
</div>
@include('admin.footeradmin')
<script  href="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
