@extends('layouts.app-admin')
@section('content')
<div class="container">


    <div class="row">
        <div class="col-12">
            <h1>
                AVD Students
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
                @foreach ( $avd_students as $avd_student )

                    <tr>
                        <td>{{ $avd_student->last_name}}</td>
                        <td>{{ $avd_student->first_name}}</td>
                        <td>{{ $avd_student->email}}</td>
                        <td>{{ $avd_student->course->title}}</td>
                        <td>{{ $avd_student->sub_course ? $avd_student->sub_course->title : ''}}</td>
                        <td>
                            <a href="{{route('admin.user.edit', $avd_student->id)}}" type="button" class="btn btn-info">Edit</a>
                            <a href="{{route('admin.toggle.account', $avd_student->id )}}" type="button" class="btn btn-danger">Deactivate</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>

@endsection
