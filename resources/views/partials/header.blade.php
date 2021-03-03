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
{{--
    <?php
        if (Auth::check()) {
    ?>
            <a class="o-login" href="{{ route('admin')}} ">
                <i class="fas fa-tachometer-alt a-dashboard-logo"></i>
                <span>Dash</span>
            </a>
    <?php
        } else {
    ?>
            <a class="o-login" href="{{ route('login')}} ">
                <img src="{{ asset('/src/img/logo/login.png')}}" alt="login" class="a-login-logo">
                <span>Login</span>
            </a>
    <?php
        }
    ?> --}}

<header class="o-header-alt">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 m-header-alt">
                <img src="{{asset('/src/img/logo/promoboek-ahs-2.png') }}" alt="GDM" title="GDM" class="a-site-logo-alt ">
                <?php
            $header = \Route::current()->getName();
            ?>
            <p class="a-course-title-alt">
                {{-- {{str_replace(' ',"\n",$sub_header ?? $header)}} --}}
                <?php echo preg_replace('/ /','<br>',$sub_header);?>
            </p>
        </div>

        <div class="col-12 col-sm-12 col-md-5 col-xl-5 offset-md-1 m-filtert-links">
            @switch(\Route::current()->getName())
                @case('portfolio-cmo')
                    <a href="{{ route('portfolio-cmo-gd') }}" class="a-sub-course-link">Graphic Design</a>
                    <a href="{{ route('portfolio-cmo-pd') }}" class="a-sub-course-link">Photo Design</a>
                @break
                @case('portfolio-cmo-gd')
                    <a href="{{ route('portfolio-cmo-gd') }}" class="a-sub-course-link">Graphic Design</a>
                    <a href="{{ route('portfolio-cmo-pd') }}" class="a-sub-course-link">Photo Design</a>
                @break
                @case('portfolio-cmo-pd')
                    <a href="{{ route('portfolio-cmo-gd') }}" class="a-sub-course-link">Graphic Design</a>
                    <a href="{{ route('portfolio-cmo-pd') }}" class="a-sub-course-link">Photo Design</a>
                @break
                @case('portfolio-avd')

                    @break
                @case('portfolio-gmb')
                    <a href="{{ route('portfolio-gmb-pm') }}" class="a-sub-course-link">Printmedia</a>
                    <a href="{{ route('portfolio-gmb-cm') }}" class="a-sub-course-link">Crossmedia</a>
                @break
                @case('portfolio-gmb-pm')
                    <a href="{{ route('portfolio-gmb-pm') }}" class="a-sub-course-link">Printmedia</a>
                    <a href="{{ route('portfolio-gmb-cm') }}" class="a-sub-course-link">Crossmedia</a>
                @break
                @case('portfolio-gmb-cm')
                    <a href="{{ route('portfolio-gmb-pm') }}" class="a-sub-course-link">Printmedia</a>
                    <a href="{{ route('portfolio-gmb-cm') }}" class="a-sub-course-link">Crossmedia</a>
                @break
                @case('yearbook')
                    <div class="o-yearbook-filter">
                        @foreach ($courses as $course)
                            @if($course->title_short !== 'teacher')
                                <a href="{{ url('yearbook/'. $course->title_short .'/') }}" class="a-yearbook-filter a-yearbook-link-{{$course->title_short}}">{{strtoupper($course->title_short)}}</a>
                            @endif
                        @endforeach

                    </div>
                @break
                @default

            @endswitch

        </div>
    </div>
</header>
<div class="a-border-header-bottom"></div>
