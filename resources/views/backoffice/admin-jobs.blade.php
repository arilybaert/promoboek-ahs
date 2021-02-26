@extends('layouts.app-admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Pending
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <tr>
                    <th>title</th>
                    <th>tags</th>
                    <th>content</th>
                    <th>name</th>
                    <th>deadline</th>
                    <th>Action</th>
                </tr>
                @foreach ( $pending_jobs as $pending_job )

                    <tr>
                        <td>{{ $pending_job->title}}</td>
                        <td>{{ $pending_job->tags}}</td>
                        <td>{{ $pending_job->content}}</td>
                        <td>{{ $pending_job->first_name . ' ' . $pending_job->last_name}}</td>
                        <td>{{ $pending_job->deadline}}</td>
                        <td>
                            <a href="{{route('admin.jobs.detail', $pending_job->id)}}" type="button" class="btn btn-secondary">Details</a>
                            <a href="{{route('admin.jobs.accept', $pending_job->id)}}" type="button" class="btn btn-success">Accept</a>
                            <a href="{{route('admin.jobs.delete', $pending_job->id )}}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h1>
                Accepted
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <tr>
                    <th>title</th>
                    <th>tags</th>
                    <th>content</th>
                    <th>name</th>
                    <th>deadline</th>
                    <th>Action</th>
                </tr>
                @foreach ( $accepted_jobs as $accepted_job )

                    <tr>
                        <td>{{ $accepted_job->title}}</td>
                        <td>{{ $accepted_job->tags}}</td>
                        <td>{{ $accepted_job->content}}</td>
                        <td>{{ $accepted_job->first_name . ' ' . $accepted_job->last_name}}</td>
                        <td>{{ $accepted_job->deadline}}</td>
                        <td>
                            <a href="{{route('admin.jobs.complete', $accepted_job->id)}}" type="button" class="btn btn-primary">Completed</a>
                            <a href="{{route('admin.jobs.delete', $accepted_job->id )}}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <h1>
                Completed
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <tr>
                    <th>title</th>
                    <th>tags</th>
                    <th>content</th>
                    <th>name</th>
                    <th>deadline</th>
                    <th>Action</th>
                </tr>
                @foreach ( $completed_jobs as $completed_job )

                    <tr>
                        <td>{{ $completed_job->title}}</td>
                        <td>{{ $completed_job->tags}}</td>
                        <td>{{ $completed_job->content}}</td>
                        <td>{{ $completed_job->first_name . ' ' . $completed_job->last_name}}</td>
                        <td>{{ $completed_job->deadline}}</td>
                        <td>
                            <a href="{{route('admin.jobs.delete', $completed_job->id )}}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
