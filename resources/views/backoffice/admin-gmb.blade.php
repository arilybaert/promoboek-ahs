@extends('layouts.app-admin')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <h1>
                GMB Students
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <tr>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Major</th>
                    <th>Action</th>
                </tr>
                @foreach ( $gmb_students as $gmb_student )

                    <tr>
                        <td>{{ $gmb_student->last_name}}</td>
                        <td>{{ $gmb_student->first_name}}</td>
                        <td>{{ $gmb_student->email}}</td>
                        <td>{{ $gmb_student->course->title}}</td>
                        <td>{{ $gmb_student->sub_course ? $gmb_student->sub_course->title : ''}}</td>
                        <td>
                            <a href="{{route('portfolio.image.edit', $gmb_student->id)}}" type="button" class="btn btn-info">Edit</a>
                            <a href="{{route('admin.toggle.account', $gmb_student->id )}}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


</div>

@endsection
