@extends('layout')

@section('content')

    <div class="o-yearbook-filter">
        @foreach ($courses as $course)
            <a href="{{ url('yearbook/'. $course->title_short .'/') }}">{{$course->title_short}}</a>

        @endforeach

    </div>
    <div class="o-yearbook-students">

        @foreach ($students as $student)
            <div class="o-studentcards col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="m-yearbook-image-container">
                    <img class="a-yearbook-profilepicture" src="{{ asset($student->profile)}}" alt="">
                    <p class="a-yearbook-student-major">{{ strtoupper($student->course->title_short)}}</p>
                </div>
                <h2 class="a-yearbook-student-name">{{ $student->first_name . ' ' . $student->last_name }}</h2>
            </div>
        @endforeach

    </div>


@endsection
