@extends('layout')

@section('content')
<div class="o-sub-courses row">
    @foreach ($sub_courses as $sub_course)
        <a href="{{ url('portfolio-cmo/'. $sub_course->title_short .'/') }}" class="col-3">{{$sub_course->title}}</a>
    @endforeach

</div>
<div class="o-cmo-portfolio">

    @foreach ( $students as $student)
        <a href="/portfolio-cmo/rick" class="o-card">
            <img src="{{ $student->thumbnail}}" alt="" class="a-cmo-image">
            <h2 class="a-cmo-card-name">{{ $student->first_name . ' ' . $student->last_name }}</h2>
            <p class="a-cmo-tagline">{{ $student->catchphrase}}</p>
            <p class="a-cmo-tagline">{{ $student->course->title}}</p>

        </a>

    @endforeach

</div>

@endsection
