@extends('layout')

@section('content')

<div class="o-cmo-portfolio o-cmo-container">

        @foreach ( $students as $student)

            <?php
                // check thumbnail aspect ratio to give according style class
                // echo '<pre>' . var_export($student->title, true) . '</pre>';


                $image_size_array = getimagesize(asset($student->url));

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
                                        <h2>{{$student->title}}</h2>
                                        <h3>{{$student->first_name . " " . $student->last_name}}</h3>
                                        <p class="a-cmo-portfolio-description">
                                            {{$student->content}}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2 m-cmo-portfolioBtn">
                                <i class="fas fa-times close"></i>
                                <a class="a-cmo-portfolioBtn" href="{{route('portfolio-cmo-detail', $student->student_id)}}">
                                    <span>portfolio</span>
                                </a>
                            </div>
                    </div>
                </div>

            </div>


        @endforeach

</div>

@endsection
