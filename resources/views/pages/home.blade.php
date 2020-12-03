@extends('layout')

@section('content')
<div class="container-xs container-sm container-md">
    <div class="o-home row">
        @foreach ( $courses as $course )
            <a class="o-home-card col-12 col-sm-6 col-md-3" href="{{ route('portfolio-' . $course->title_short)}}">
                <div class="m-img-container">
                    <img src="{{ asset($course->img_url) }}" alt="" class="a-home-card-image">
                    <div class="m-home-card-tag a-bg-color-{{ $course->title_short}}">
                        <span class="a-home-card-tag ">{{ strtoupper($course->title_short)}}</span>
                    </div>
                </div>
                <h3 class="a-home-card-subtitle">{{ $course->title}}</h3>
                <p class="a-home-explination">{{ $course->content}}</p>
            </a>
        @endforeach
    </div>
</div>

@endsection
