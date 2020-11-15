@extends('layout')

@section('content')
<div class="container">
    <div class="o-sub-courses row">
        @foreach ($sub_courses as $sub_course)
            <a href="{{ url('portfolio-cmo/'. $sub_course->title_short .'/') }}" class="col-3 a-sub-course-title">{{$sub_course->title}}</a>
        @endforeach

    </div>
</div>
<div class="o-cmo-portfolio ">

        @foreach ( $students as $student)

            <?php $col_size = $col_size+1 ?>

            <a href="/portfolio-cmo/rick" class="{{$col_size%2 ? 'o-card-right ' : 'o-card-left' }} o-card">
                <img src="{{ $student->thumbnail}}" alt="" class="a-cmo-image">
                {{-- <h2 class="a-cmo-card-name">{{ $student->first_name . ' ' . $student->last_name }}</h2>
                <p class="a-cmo-tagline">{{ $student->catchphrase}}</p>
                <p class="a-cmo-tagline">{{ $student->course->title}}</p> --}}

            </a>

        @endforeach

</div>

@endsection
