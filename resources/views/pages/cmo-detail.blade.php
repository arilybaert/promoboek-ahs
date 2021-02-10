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
        <span  class="{{ $image_aspect_ratio >= 1 ? 'm-landscape' : 'm-portait' }}">
            <img src="{{ asset($image->url) }}" alt="" class="a-cmo-detail-img">

        </span>
        @endforeach
    </div>

</div>


@endsection
