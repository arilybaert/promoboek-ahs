
@extends('layout')

@section('content')

<div class="o-avd-home">
    <div class="row">

    @foreach ($students as $student)

        <div class="col-12 col-sm-6 col-md-4 o-avd-home-card trigger">
            <div class="m-image-container">
                <img src="{{ asset($student->thumbnail_image) }}" alt="thumbnail" class="a-avd-home-thumbnail">
                <img src="{{asset('/src/img/logo/playButton.png')}}" alt="play" class="a-avd-home-play">
            </div>
            <h2 class="a-avd-home-title">{{ $student->title }} </h2>
            <p class="a-avd-home-content">{{$student->content}}</p>

        </div>
        <!-- The Modal -->
        <div class="a-modal">

            <!-- Modal content -->
            <div class="o-modal-content">
                <div class="row">
                    <div class="col-12 m-avd-porfolioBtn">
                        <i class="fas fa-times close"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <video class="a-avd-modal-video" controls id="a-video-{{$loop->index}}">
                            <source src="{{ asset($student->url) }}" type="video/mp4">
                        Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="row o-avd-modal-portfolio">
                    <div class="col-4">
                        <h2  class="a-student-portofolio-header">{{$student->title}}</h2>
                        <h3 class="a-student-portofolio-sub_header">{{$student->first_name . " " . $student->last_name}}</h3>
                    </div>
                    <div class="col-8">
                        <p class="a-cmo-portfolio-description">
                            {{$student->content}}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 offset-9 m-avd-porfolioBtn">
                        <a class="a-cmo-portfolioBtn" href="{{route('portfolio-avd-detail', $student->student_id)}}">
                            <span>portfolio</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
    </div>

</div>
@endsection
