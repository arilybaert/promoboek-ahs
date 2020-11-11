<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AHS Promoboek</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<header class="o-header container">

    <div class="m-headerTop row">
        @if (\Route::current()->getName() == 'home')
            <a href="{{ route('yearbook')}}" class="a-link order-2 order-md-1 col-sm-3 col-md-2">Yearbook</a>
            <a href="{{ route('jobs')}}" class="a-link order-3 order-md-3 col-sm-3  col-md-2">Jobs</a>
        @endif

        <div class="order-1 order-md-2 col-sm-12 col-md-5 m-site-logo">
            <img src="/src/img/logo/promoboek-ahs.png" alt="GDM" title="GDM" class="a-site-logo ">
        </div>
    </div>

    {{-- <div class="m-headerBottom row">
        <span class=" a-line a-lineLeft col-4"></span>
        <span class="a-subHeader col-4">{{$sub_header}}</span>
        <span class="a-line a-lineRight col-4"></span>
    </div> --}}

</header>
