@extends('layouts.app-admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Requests
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
                    <th>Profilephoto</th>
                    <th>Action</th>
                </tr>
                @foreach ( $requests as $request )

                    <tr>
                        <td>{{ $request->last_name}}</td>
                        <td>{{ $request->first_name}}</td>
                        <td>{{ $request->email}}</td>
                        <td>{{ $request->course->title}}</td>
                        <td>{{ $request->sub_course ? $request->sub_course->title : ''}}</td>
                        <td>{{ strlen($request->profile) > 1 ? 'true' : 'false'}} </td>
                        <td>
                            <a href="{{route('admin.user.edit', $request->id)}}" type="button" class="btn btn-info">Edit</a>
                            <a href="{{route('admin.toggle.account', $request->id )}}" type="button" class="btn btn-success">Activate</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h1>
                Administrators
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
                @foreach ( $admins as $admin )

                    <tr>
                        <td>{{ $admin->last_name}}</td>
                        <td>{{ $admin->first_name}}</td>
                        <td>{{ $admin->email}}</td>
                        <td>{{ $admin->course->title}}</td>
                        <td>{{ $admin->sub_course ? $admin->sub_course->title : ''}}</td>
                        <td>
                            <a href="{{route('user.make', $admin->id)}}" type="button" class="btn btn-warning">Make user</a>
                            <a href="{{route('admin.toggle.account', $admin->id )}}" type="button" class="btn btn-danger">Deactivate</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h1>
                Teachers
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
                @foreach ( $teachers as $teacher )

                    <tr>
                        <td>{{ $teacher->last_name}}</td>
                        <td>{{ $teacher->first_name}}</td>
                        <td>{{ $teacher->email}}</td>
                        <td>{{ $teacher->course->title}}</td>
                        <td>{{ $teacher->sub_course ? $teacher->sub_course->title : ''}}</td>
                        <td>
                            <a href="{{route('portfolio.image.edit', $teacher->id)}}" type="button" class="btn btn-info">Edit</a>
                            <a href="{{route('admin.make', $teacher->id)}}" type="button" class="btn btn-warning">Make admin</a>
                            <a href="{{route('admin.toggle.account', $teacher->id )}}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
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
                            <a href="{{route('portfolio.image.edit', $avd_student->id)}}" type="button" class="btn btn-info">Edit</a>
                            <a href="{{route('admin.toggle.account', $avd_student->id )}}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

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
                            <a href="{{route('portfolio.image.edit', $nmd_student->id)}}" type="button" class="btn btn-info">Edit</a>
                            <a href="{{route('admin.toggle.account', $nmd_student->id )}}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

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
