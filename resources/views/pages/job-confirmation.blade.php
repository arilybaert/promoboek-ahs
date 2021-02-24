@extends('layout')

@section('content')

    <div class="o-job-new-container">
        <div class="row">
            <div class="col-12 o-job-confirmation">
                <p class="a-job-confirmation">
                    Thank you for submitting a new job, you'll get an email once the offer is published to our website.
                    <br>
                    <br>
                    Have a good day!
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="m-job-confirmation-home-link">
                    <a href="{{route('home') }}" class="a-job-confirmation-home-link">Go Home</a>
                </div>
            </div>
        </div>

    </div>

@endsection
