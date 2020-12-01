@extends('layout')

@section('content')
<div class="container">
    <div class="cmo-detail-header">
        <p>{{$student->catchphrase}}</p>
    <img src="/{{$student->profile}}" alt="profile-picture" class="a-cmo-detail-profile">

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
