@extends('layout')

@section('content')
<div class="container">
    <div class="o-cmo-detail-header">

        <div class="row">
            <div class="col-12 col-sm-5">
                <div class="m-cmo-detail-container">
                    <img src="{{asset($student->profile)}}" alt="profile-picture" class="a-cmo-detail-profile">
                    <p class="a-cmo-detail-profile-tag">{{strtoupper($student->course->title_short)}}</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 m-student-detail-info">
                <h2 class="a-student-detail-page">
                    {{ $student->first_name . ' ' . $student->last_name}}
                </h2>
                {{-- bio --}}
                <p class="a-cmo-detail-bio">{{$student->bio}}</p>
                {{-- catchphrase --}}
                <p class="a-cmo-detail-catchprase">"{{$student->catchphrase}}"</p>
            </div>
        </div>
    </div>
</div>
<div class="a-border-header-bottom"></div>
<div class="container">
    {{-- portfolio images --}}
    <div class="o-cmo-detail-main">

        @foreach ($images as $image)
        <?php
        // check thumbnail aspect ratio to give according style class
        // echo '<pre>' . var_export($student->url, true) . '</pre>';


        $image_size_array = getimagesize($image->url);

        $image_width = $image_size_array[0];
        $image_height = $image_size_array[1];
        $image_aspect_ratio = ($image_size_array[0] / $image_size_array[1]);
    ?>
        <span  class="{{ $image_aspect_ratio >= 1 ? 'm-landscape' : 'm-portait' }} trigger">
            <img src="{{ asset($image->url) }}" alt="" class="a-cmo-detail-img">

        </span>
                    <!-- The Modal -->
                    <div class="a-modal">

                        <!-- Modal content -->
                        <div class="o-modal-content">


                                <div class="row">
                                    <div class="col-10">
                                        <div class="row">
                                            <div class="col-12 col-md-5">
                                                <img src="{{ asset($image->url) }}" alt="" class="a-cmo-modal-image">
                                            </div>
                                            <div class="o-student-portofolio-info col-12 col-md-5">
                                                <h2>{{$image->title}}</h2>
                                                <h3>{{$student->first_name . " " . $student->last_name}}</h3>
                                                <p class="a-cmo-portfolio-description">
                                                    {{$image->content}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-2 m-cmo-portfolioBtn">
                                        <i class="fas fa-times close"></i>
                                        <a class="a-cmo-portfolioBtn" href="{{$image->href}}">
                                            <span>Site</span>
                                        </a>
                                    </div>
                            </div>
                        </div>

                    </div>
        @endforeach
    </div>

</div>


@endsection
