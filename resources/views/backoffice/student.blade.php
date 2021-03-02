@extends('layouts.app-student')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Edit profile
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form class="row g-3" action="{{ route('student.edit', $user->id )}}" method="POST">
                @csrf

                <div class="col-md-6">
                  <label for="firstname" class="form-label">Firstname</label>
                  <input type="text" class="form-control" name="firstname" value="{{ old('firstname', ($user ? $user->first_name : '')) }}" disabled>
                  <input type="hidden" class="form-control" id="id" name="id" value="{{ $user ? $user->id : '' }}">
                </div>
                <div class="col-md-6">
                  <label for="lastname" class="form-label">Lastname</label>
                  <input type="text" class="form-control" name="lastname" value="{{ old('lastname', ($user ? $user->last_name : '')) }}" disabled>
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" value="{{ old('email', ($user ? $user->email : '')) }}" disabled>
                </div>
                <div class="col-12">
                  <label for="catchphrase" class="form-label @error('catchphrase') invalid @enderror">Catchphrase</label>
                  <input type="text" class="form-control" name="catchphrase" value="{{ old('catchphrase', ($user ? $user->catchphrase : '')) }}">
                </div>
                <div class="col-md-12">
                  <label for="bio" class="form-label @error('bio') invalid @enderror">Bio</label>
                  <textarea type="text" class="form-control" name="bio" style="height: 200px" >{{ old('bio', ($user ? $user->bio : '')) }}</textarea>
                </div>


                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
        </div>
    </div>

    <div class="row">
        <div class="col-11">
            <h1>
                Edit portfolio
            </h1>
        </div>
        <div class="col-1">
                <a href="{{$user->course_id === 2 ? route('portfolio.video.new') : route('portfolio.image.new')}}" type="button" class="btn btn-warning">New</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <tr>
                    <th>File Thumbnail</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Thumbnail</th>
                    <th>Tags</th>
                    <th>Action</th>
                </tr>
                @foreach ( $files as $file )

                    <tr>
                        <td>
                            <img src="{{asset($file->thumbnail_image ?? $file->url)}}" alt="" style="height: 100px; width: 100px; object-fit:cover;">
                        </td>
                        <td>{{ $file->title}}</td>
                        <td>{{ $file->content}}</td>
                        <td>{{ $file->thumbnail}}</td>
                        <td>{{ $file->tags}}</td>
                        <td>
                            <a href="{{$user->course_id === 2 ? route('portfolio.video', $file->id) : route('portfolio.image', $file->id)}}" type="button" class="btn btn-info">Edit</a>
                            <a href="{{route('portfolio.image.delete', $file->id )}}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
