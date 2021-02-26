@extends('layouts.app-admin')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <h1>
                NMD Students
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
                @foreach ( $nmd_students as $nmd_student )

                    <tr>
                        <td>{{ $nmd_student->last_name}}</td>
                        <td>{{ $nmd_student->first_name}}</td>
                        <td>{{ $nmd_student->email}}</td>
                        <td>{{ $nmd_student->course->title}}</td>
                        <td>{{ $nmd_student->sub_course ? $nmd_student->sub_course->title : ''}}</td>
                        <td>
                            <a href="{{route('admin.user.edit', $nmd_student->id)}}" type="button" class="btn btn-info">Edit</a>
                            <a href="{{route('admin.toggle.account', $nmd_student->id )}}" type="button" class="btn btn-danger">Deactivate</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>

@endsection
