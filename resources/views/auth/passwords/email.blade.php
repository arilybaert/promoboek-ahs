@extends('layout-home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12  o-login-menu">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row  m-login-menu">
                            <label for="email" class="col-12 col-sm-5 a-login-label">Email</label>

                            <div class="col-12 col-sm-6">
                                <input id="email" type="email" class="a-login-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-4 offset-sm-5">
                                <button type="submit" class="a-login-button">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
    </div>
</div>
@endsection
