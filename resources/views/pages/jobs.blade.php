@extends('layout')

@section('content')


<div class="o-jobcontainer">

    <div class="col-12 m-job-new-link">
        <a href="{{route('jobs-new')}}" class="a-job-new-link"> + Nieuw zoekertje plaatsen</a>
    </div>

    @foreach ($jobs as $job)
        <div class="col-12 o-job-card">
            <div class="row">
                <div class="col-8">
                    <h2 class="a-job-title">
                        {{$job->title}}
                    </h2>
                </div>
                <div class="col-4 o-job-date">
                    geplaatst op {{date("D j M Y", strtotime($job->created_at))}}
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <span class="a-job-hashtags">
                        {{ $job->tags }}
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <p class="a-job-description">
                        {{ $job->content }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 o-job-deadline">
                    <span class="a-job-deadline">
                        deadline {{ date("d/m/Y", strtotime($job->deadline)) }}
                    </span>
                </div>
                <div class="col-6 o-job-contact">
                    <span class="a-job-contact trigger">
                        contacteer
                    </span>
                </div>
            </div>
        </div>

        <!-- The Modal -->
        <div class="a-modal">

            <!-- Modal content -->
            <div class="o-modal-content">


                    <div class="row">
                        <div class="col-10">
                            <div class="row">
                                <div class="col-12 col-sm-5 col-md-5 o-contact-icon">
                                    <div class="m-contact-icon m-contact-icon__top">
                                        <i class="fas fa-mobile-alt a-contact-icon"></i>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 col-md-7 a-contact-info">
                                    <span>{{ $job->phone}}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-5 col-md-5 o-contact-icon">
                                    <div class="m-contact-icon">
                                        <i class="fas fa-envelope-open-text a-contact-icon"></i>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 col-md-7 a-contact-info">
                                    <span>{{ $job->email}} </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 m-cmo-portfolioBtn">
                            <i class="fas fa-times close"></i>
                        </div>
                </div>
            </div>

        </div>
    @endforeach

</div>
@endsection
