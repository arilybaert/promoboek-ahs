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

            <?php $col_size = $col_size+1; ?>
            <?php

            // check thumbnail aspect ratio to give according style class

            $image_size_array = getimagesize($student->thumbnail);

            $image_width = $image_size_array[0];
            $image_height = $image_size_array[1];
            $image_aspect_ratio = ($image_size_array[0] / $image_size_array[1]);
?>

{{-- href="/portfolio-cmo/rick" --}}
            <span  class="{{ $image_aspect_ratio >= 1 ? 'm-landscape' : 'm-portait' }}    m-cmo-img">
                <img src="{{ $student->thumbnail}}" alt="" class="a-cmo-image">

            </span>


        @endforeach

</div>

@endsection
