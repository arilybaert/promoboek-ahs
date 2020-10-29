@extends('layout')

@section('content')
<h1 class="a-page-title">Yearbook</h1>

    <div class="o-yearbook-filter">
        @foreach ($courses as $course)
            <a href="{{ url('yearbook/'. $course->title_short .'/') }}">{{$course->title_short}}</a>

        @endforeach

    </div>
    <div class="o-yearbook-students container-fluid">

        @foreach ($students as $student)
            <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
                <img class="a-yearbook-profilepicture" src="{{ $student->picture}}" alt="">
                <h2 class="a-yearbook-student-name">{{ $student->first_name . ' ' . $student->last_name }}</h2>
                <p class="a-yearbook-student-major">{{ $student->course->title}}</p>
            </div>
        @endforeach
        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>

        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>

        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>

        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>

        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>

        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>


        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>
        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>
        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>
        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>
        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>
        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>
        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>
        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>
        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>
        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>
        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>
        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>
        <div class="o-studentcards col-sm-12 col-md-4 col-lg-2 col-xl-2">
            <img class="a-yearbook-profilepicture" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1333&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2019%2F10%2Fmark-zuckerberg-1-2000.jpg" alt="">
            <h2 class="a-yearbook-student-name">Mark Zuckerberg</h2>
            <p class="a-yearbook-student-major">Croos Media Ontwerp</p>
        </div>
    </div>


@endsection
