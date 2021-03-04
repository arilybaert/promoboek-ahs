@extends('layout-home')

@section('content')
<div class="container">
    <div class="row o-register">
        <div class="col-8">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row o-form-group">
                            <label for="first_name" class="a-register-label col-12 col-md-4">{{ __('Firstname') }}</label>

                            <div class="col-12 col-md-6">
                                <input id="first_name" type="text" class="a-register-input @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="row o-form-group">
                            <label for="last_name" class="a-register-label col-12 col-md-4 ">{{ __('Lastname') }}</label>

                            <div class="col-12 col-md-6">
                                <input id="last_name" type="text" class="a-register-input @error('name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="row o-form-group">
                            <label for="email" class="a-register-label col-12 col-md-4 ">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="a-register-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row o-form-group">
                            <label for="course" class="a-register-label col-12 col-md-4">{{ __('Course') }}</label>

                            <div class="col-12 col-md-6">

                                <select id="course"  name="course" class=" @error('course') is-invalid @enderror" aria-label="Default select example" required>
                                    <option selected disabled>Open this select menu</option>
                                    <option value="1">CMO</option>
                                    <option value="2">AVD</option>
                                    <option value="3">NMD</option>
                                    <option value="4">GMB</option>
                                    <option value="5">Teacher</option>
                                </select>

                                  @error('course')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>

                        <div class="row o-form-group">
                            <label for="sub_course" class="a-register-label col-12 col-md-4">{{ __('Major') }}</label>

                            <div class="col-12 col-md-6">

                                <select id="sub_course"  name="sub_course" class="@error('sub_course') is-invalid @enderror" aria-label="Default select example" required>
                                    <option selected disabled>Open this select menu</option>
                                    <option>None</option>
                                    <option value="1">CMO: Grafic Design</option>
                                    <option value="2">CMO: Photodesign</option>
                                    <option value="3">GMB: Printmedia</option>
                                    <option value="4">GMB: Crossmedia</option>
                                </select>

                                  @error('course')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>

                        <div class="row o-form-group">
                            <label for="password" class="a-register-label col-12 col-md-4 ">{{ __('Password') }}</label>

                            <div class="col-12 col-md-6">
                                <input id="password" type="password" class="a-register-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row o-form-group">
                            <label for="password-confirm" class="a-register-label col-12 col-md-4">{{ __('Confirm Password') }}</label>

                            <div class="col-12 col-md-6">
                                <input id="password-confirm" type="password" class="a-register-input " name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="a-register-button">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
