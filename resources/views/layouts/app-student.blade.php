<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>

        .progress { position:relative; width:100%; }

        .bar { background-color: #00ff00; width:0%; height:20px; }

        .percent { position:absolute; display:inline-block; left:50%; color: #040608;}

   </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('student') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    Student backoffice
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin') }}">Accounts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.jobs') }}">Jobs</a>
                        </li> --}}
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('changePassword-student') }}">Change password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('student') }}">Edit profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Go back to site</a>
                        </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <script type="text/javascript">

        var SITEURL = "{{URL('/')}}";

        $(function() {

            $(document).ready(function()

            {

                var bar = $('.bar');

                var percent = $('.percent');

                  $('#form').ajaxForm({

                    beforeSend: function() {

                        var percentVal = '0%';

                        bar.width(percentVal)

                        percent.html(percentVal);

                    },

                    uploadProgress: function(event, position, total, percentComplete) {

                        var percentVal = percentComplete + '%';

                        bar.width(percentVal)

                        percent.html(percentVal);

                    },

                    complete: function(xhr) {

                        alert('File Has Been Uploaded Successfully');

                        window.location.href = SITEURL +"/"+"ajax-file-upload-progress-bar";

                    }

                  });

            });

         });

        </script>

</body>

</html>
