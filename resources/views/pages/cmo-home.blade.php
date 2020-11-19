@extends('layout')

@section('content')
<div class="container">
    <div class="o-sub-courses row">
        @foreach ($sub_courses as $sub_course)
            <a href="{{ url('portfolio-cmo/'. $sub_course->title_short .'/') }}" class="col-3 a-sub-course-title">{{$sub_course->title}}</a>
        @endforeach

    </div>
</div>
<div class="o-cmo-portfolio o-cmo-container">

        @foreach ( $students as $student)

            <?php
                // check thumbnail aspect ratio to give according style class

                $image_size_array = getimagesize($student->thumbnail);

                $image_width = $image_size_array[0];
                $image_height = $image_size_array[1];
                $image_aspect_ratio = ($image_size_array[0] / $image_size_array[1]);
            ?>

            <span class="
                {{ $image_aspect_ratio >= 1 ? 'm-landscape' : 'm-portait' }} m-cmo-img trigger">

                <img src="{{ $student->thumbnail }}" alt="" class="a-cmo-image">
            </span>

            <!-- The Modal -->
            <div class="a-modal">

                <!-- Modal content -->
                <div class="o-modal-content">
                    <span class="close">&times;</span>

                        <div class="row">
                            <div class="col-5">
                                <img src="{{ $student->thumbnail }}" alt="" class="a-cmo-modal-image">
                            </div>
                            <div class="o-student-portofolio-info col-6">
                                <h2>Titel werk</h2>
                                <h3>{{$student->first_name . " " . $student->last_name}}</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qu

                                </p>
                            </div>
                    </div>
                </div>

            </div>


        @endforeach

</div>

@endsection
