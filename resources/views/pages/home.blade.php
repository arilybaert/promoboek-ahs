@extends('layout-home')

@section('content')
<div class="container-xs container-sm container-md">
    <div class="o-home row">
        @foreach ( $courses as $course )
            <a class="o-home-card col-6 col-sm-6 col-md-3" href="{{ route('portfolio-' . $course->title_short)}}">
                <div class="m-img-container">
                    <img src="{{ asset($course->img_url) }}" alt="" class="a-home-card-image">
                    <div class="m-home-card-tag a-bg-color-{{ $course->title_short}}">
                        <span class="a-home-card-tag ">{{ strtoupper($course->title_short)}}</span>
                    </div>
                </div>
                <h3 class="a-home-card-subtitle">{{ $course->title}}</h3>
                <p class="a-home-explination">{{ $course->content}}</p>
            </a>
        @endforeach
    </div>
    <div class="row o-home-video-links">
        <div class="col-12">
            <div class="m-home-video-link-container">
                <button class="a-home-video-link a-home-video-link__cmo" onclick="openVideo(event, 'cmo')" id="default">CMO</button>
                <button class="a-home-video-link a-home-video-link__avd" onclick="openVideo(event, 'avd')">AVD</button>
                <button class="a-home-video-link a-home-video-link__nmd" onclick="openVideo(event, 'nmd')">NMD</button>
                <button class="a-home-video-link a-home-video-link__gmb" onclick="openVideo(event, 'gmb')">GMB</button>
            </div>
        </div>
    </div>
    <div class="row o-video-content">
        <div class="col-12 o-home-video">
            <video class="a-home-video" controls id="cmo">
                <source src="{{ asset('src/video/home/home-cmo.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
            </video>
            <video class="a-home-video" controls id="avd">
                <source src="{{ asset('src/video/home/home-avd.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
            </video>
            <video class="a-home-video" controls id="nmd">
                <source src="{{ asset('src/video/home/home-nmd.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
            </video>
            <video class="a-home-video" controls id="gmb">
                <source src="{{ asset('src/video/home/home-gmb.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>
<script>
    console.log('hey');
    document.getElementById("default").click();
    function openVideo(evt, course) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("a-home-video");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    tabcontent[i].pause();
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("a-home-video-link");
  for (i = 0; i < tablinks.length; i++) {
    // tablinks[i].className = tablinks[i].className.replace(` a-home-video-link__${course}-active`, " ");
    tablinks[i].classList.remove(`a-home-video-link__cmo-active`);
    tablinks[i].classList.remove(`a-home-video-link__avd-active`);
    tablinks[i].classList.remove(`a-home-video-link__nmd-active`);
    tablinks[i].classList.remove(`a-home-video-link__gmb-active`);

  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(course).style.display = "block";
  evt.currentTarget.className += ` a-home-video-link__${course}-active`;
}
</script>
@endsection
