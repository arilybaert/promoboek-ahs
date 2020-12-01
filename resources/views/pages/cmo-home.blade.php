@extends('layout')

@section('content')
<div class="container">
    <div class="o-sub-courses row">
        {{-- @foreach ($sub_courses as $sub_course)
            <a href="{{ url('portfolio-cmo/'. $sub_course->title_short .'/') }}" class="col-5 col-md-3 a-sub-course-title">{{$sub_course->title}}</a>
        @endforeach --}}
        <a href="{{ route('portfolio-cmo-gd') }}" class="col-5 col-md-3 a-sub-course-title">Graphic Design</a>
        <a href="{{ route('portfolio-cmo-pd') }}" class="col-5 col-md-3 a-sub-course-title">Photo Design</a>


    </div>
</div>
<div class="o-cmo-portfolio o-cmo-container">

        @foreach ( $students as $student)

            <?php
                // check thumbnail aspect ratio to give according style class
                // echo '<pre>' . var_export($student->url, true) . '</pre>';


                $image_size_array = getimagesize($student->url);

                $image_width = $image_size_array[0];
                $image_height = $image_size_array[1];
                $image_aspect_ratio = ($image_size_array[0] / $image_size_array[1]);
            ?>

            <span class="
                {{ $image_aspect_ratio >= 1 ? 'm-landscape' : 'm-portait' }} m-cmo-img trigger">

                <img src="{{ asset($student->url) }}" alt="" class="a-cmo-image">
            </span>

            <!-- The Modal -->
            <div class="a-modal">

                <!-- Modal content -->
                <div class="o-modal-content">


                        <div class="row">
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-12 col-md-5">
                                        <img src="{{ asset($student->url) }}" alt="" class="a-cmo-modal-image">
                                    </div>
                                    <div class="o-student-portofolio-info col-12 col-md-5">
                                        <h2>Titel werk</h2>
                                        <h3>{{$student->first_name . " " . $student->last_name}}</h3>
                                        <p class="a-cmo-portfolio-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qu

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2 m-cmo-portfolioBtn">
                                <i class="fas fa-times close"></i>
                                <a class="a-cmo-portfolioBtn" href="{{route('portfolio-cmo-detail', $student->id)}}">
                                    <span>portfolio</span>
                                </a>
                            </div>
                    </div>
                </div>

            </div>


        @endforeach

</div>

@endsection
