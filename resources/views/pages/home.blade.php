@extends('layout')

@section('content')
<div class="o-links">
    <a href="{{ route('yearbook')}}" class="a-link">Yearbook</a>
    <a href="{{ route('jobs')}}" class="a-link">Jobs</a>
</div>
<div class="o-home">
    @foreach ( $courses as $course )
        <a class="o-home-card" href="{{ route('portfolio-cmo')}}">
            <img src="{{ $course->img_url}}" alt="" class="a-home-card-image">
            <h2 class="a-home-card-title">{{ $course->title_short}}</h2>
            <h3 class="a-home-card-subtitle">{{ $course->title}}</h3>
            <p class="a-home-explination">{{ $course->content}}</p>
        </a>
    @endforeach
</div>

@endsection
