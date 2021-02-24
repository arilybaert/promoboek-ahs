<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AHS Promoboek</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1f9fa605a9.js" crossorigin="anonymous"></script>
</head>
<body>
    <a class="o-login" href="{{ route('login')}} ">
        <img src="{{ asset('/src/img/logo/login.png')}}" alt="login" class="a-login-logo">
        <span>Login</span>
    </a>
<header class="o-header container">

    <div class="m-headerTop row">
        @if (\Route::current()->getName() == 'home')
            <a href="{{ route('yearbook')}}" class="a-link order-2 order-md-1 col-sm-3 col-md-3">Yearbook</a>
            <a href="{{ route('jobs')}}" class="a-link order-3  offset-sm-1 offset-md-0 order-md-3 col-sm-3  col-md-3">Jobs</a>
        @endif

        <div class="order-1 order-md-2 col-sm-12 col-md-6 m-site-logo">
            <img src="{{asset('/src/img/logo/promoboek-ahs-2.png') }}" alt="GDM" title="GDM" class="a-site-logo ">
        </div>
    </div>

    <div class="m-headerBottom row">
        <span class=" a-line a-lineLeft col-2 col-sm-3 col-md-4"></span>
        <span class="a-subHeader col-8 col-sm-6 col-md-4">{{$sub_header}}</span>
        <span class="a-line a-lineRight col-2 col-sm-3 col-md-4"></span>
    </div>

</header>
