@extends('layout')

@section('content')
<div class="container-md">
    <div class="o-home row">
        @foreach ( $courses as $course )
            <a class="o-home-card col-12 col-sm-6 col-md-3" href="{{ route('portfolio-cmo')}}">
                <div class="m-img-container">
                    <img src="{{ $course->img_url}}" alt="" class="a-home-card-image">
                    <div class="m-home-card-tag a-bg-color-{{ $course->title_short}}">
                        <span class="a-home-card-tag ">{{ $course->title_short}}</span>
                    </div>
                </div>
                <h3 class="a-home-card-subtitle">{{ $course->title}}</h3>
                <p class="a-home-explination">{{ $course->content}}</p>
            </a>
        @endforeach
    </div>
</div>

@endsection
