@extends('layouts.app-admin')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <h1>
                CMO Students
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
                @foreach ( $cmo_students as $cmo_student )

                    <tr>
                        <td>{{ $cmo_student->last_name}}</td>
                        <td>{{ $cmo_student->first_name}}</td>
                        <td>{{ $cmo_student->email}}</td>
                        <td>{{ $cmo_student->course->title}}</td>
                        <td>{{ $cmo_student->sub_course ? $cmo_student->sub_course->title : ''}}</td>
                        <td>
                            <a href="{{route('portfolio.image.edit', $cmo_student->id)}}" type="button" class="btn btn-info">Edit</a>
                            <a href="{{route('admin.toggle.account', $cmo_student->id )}}" type="button" class="btn btn-danger">Deactivate</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>

@endsection
