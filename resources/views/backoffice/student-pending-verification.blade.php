@extends('layout')

@section('content')
<div class="row o-pending">
    <div class="col-7 m-pending">
        <p>
            Thank you for making an account on our site. The administrator will be notified and will verify if the account submission is following our guidelines. You'll receive an email if and when the admin verfies your account. Don't forget to check your spam folder.
        </p>
        <p>
            Sincerely,
        </p>
        <p>
            Artevelde staff xoxo
        </p>
        <div class="col-12 m-pending-home-button">
            <a href="{{route('home')}}" class="a-pending-home-button">Go home</a>
        </div>
    </div>
</div>
@endsection
