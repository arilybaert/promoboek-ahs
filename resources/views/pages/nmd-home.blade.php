@extends('layout')

@section('content')
<div class="container">
    <div class="row">

    </div>
</div>
<div class="o-nmd-portfolio">

        @foreach ( $students as $student)


            <a class="o-nmd-card"  href="{{route('portfolio-nmd-detail', $student->id)}}">
                <img src="{{ asset($student->url) }}" alt="" class="a-nmd-image">
                <h3 class="a-nmd-tags">{{ $student->tags}} </h3>
                <p class="a-nmd-home-content">{{ $student->content}} </p>
            </a>

            <!-- The Modal -->
            {{-- <div class="a-modal">

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

            </div> --}}


        @endforeach

</div>

@endsection
