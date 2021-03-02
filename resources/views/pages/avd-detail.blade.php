@extends('layout')

@section('content')
<div class="container">
    <div class="cmo-detail-header">

        {{-- catchphrase --}}
        <p class="a-cmo-detail-catchprase">{{$student->catchphrase}}</p>

        {{-- profilepicture --}}

        <div class="m-cmo-detail-container">
            <img src="/{{$student->profile}}" alt="profile-picture" class="a-cmo-detail-profile">
            <p class="a-cmo-detail-profile-tag">{{strtoupper($student->course->title_short)}}</p>
        </div>

        {{-- bio --}}
        <p class="a-cmo-detail-bio">{{$student->bio}}</p>
    </div>

    {{-- portfolio images --}}
    <div class="row">

        @foreach ($videos as $video)

        <div class="col-6 o-avd-home-card trigger">
            <div class="m-image-container">
                <img src="{{ asset($video->thumbnail_image) }}" alt="thumbnail" class="a-avd-home-thumbnail">
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
                        <video class="a-avd-modal-video" controls>
                            <source src="{{ asset($video->url) }}" type="video/mp4">
                        Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="row o-avd-modal-portfolio">
                    <div class="col-4">
                        <h2>{{$video->title}}</h2>
                        <h3>{{$student->first_name . " " . $student->last_name}}</h3>
                    </div>
                    <div class="col-8">
                        <p class="a-cmo-portfolio-description">
                            {{$video->content}}
                        </p>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-3 offset-9 m-avd-porfolioBtn">
                        <a class="a-cmo-portfolioBtn" href="{{route('portfolio-avd-detail', $student->student_id)}}">
                            <span>portfolio</span>
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
        @endforeach
    </div>

</div>


@endsection
