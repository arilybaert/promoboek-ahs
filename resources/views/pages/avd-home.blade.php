
@extends('layout')

@section('content')

<div class="o-avd-home">
    <div class="row">

        <div class="col-4 o-avd-home-card trigger">
            <div class="m-image-container">
                <img src="{{asset('/src/img/thumbnails/thumb-1.jpg')}}" alt="thumbnail" class="a-avd-home-thumbnail">
                <img src="{{asset('/src/img/logo/playButton.png')}}" alt="play" class="a-avd-home-play">
            </div>
            <h2 class="a-avd-home-title">Title</h2>
            <p class="a-avd-home-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam reiciendis hic quibusdam, saepe natus alias repudiandae dolore impedit exercitationem quo eaque, nihil molestias, nostrum vel incidunt. Adipisci iste eveniet modi!</p>

        </div>
        <!-- The Modal -->
        <div class="a-modal">

            <!-- Modal content -->
            <div class="o-modal-content">
                <div class="row">
                    <div class="col-12 m-avd-porfolioBtn">
                        <i class="fas fa-times close"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <video class="a-avd-modal-video" autoplay muted controls>
                            <source src="src/video/portfolio/avd-1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="row o-avd-modal-portfolio">
                    <div class="col-4">
                        <h2>Title</h2>
                        <h3>Joshua Bauwens</h3>
                    </div>
                    <div class="col-8">
                        <p class="a-cmo-portfolio-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam reiciendis hic quibusdam, saepe natus alias repudiandae dolore impedit exercitationem quo eaque, nihil molestias, nostrum vel incidunt. Adipisci iste eveniet modi!
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 offset-9 m-avd-porfolioBtn">
                        <a class="a-cmo-portfolioBtn" href="">
                            <span>portfolio</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
@endsection
