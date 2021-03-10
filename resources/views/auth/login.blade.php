@extends('layout-home')

@section('content')
<div class="container">
    <div class="row o-register">
        <div class="col-8  ">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row o-form-group">
                            <label for="email" class="col-12 col-md-5 a-login-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-12 col-md-6">
                                <input id="email" type="email" class="a-login-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row o-form-group">
                            <label for="password" class="col-12 col-md-5 a-login-label">{{ __('Password') }}</label>

                            <div class="col-12 col-md-6">
                                <input id="password" type="password" class="a-login-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row o-form-group">
                            <div class="col-12 col-md-4 offset-md-5">
                                <div class="">
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="a-remember-me" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row o-form-group">
                            <div class="col-12 col-md-6 offset-md-5">
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 offset-md-5">
                                <button type="submit" class="a-login-button">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        <div class="row o-form-group">
                            <div class="col-12 col-md-6 offset-md-5">
                                <a href="{{ route('register')}}">Don't have an account yet? Register here!</a>
                            </div>
                        </div>
                    </form>
    </div>
</div>
@endsection
