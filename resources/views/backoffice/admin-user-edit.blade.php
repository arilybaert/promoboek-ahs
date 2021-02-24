@extends('layouts.app-admin')
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
            <form class="row g-3" action="{{ route('admin.user.save', $user->id )}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col-md-6">
                  <label for="firstname" class="form-label">Firstname</label>
                  <input type="text" class="form-control" name="firstname" value="{{ old('firstname', ($user ? $user->first_name : '')) }}">
                  <input type="hidden" class="form-control" id="id" name="id" value="{{ $user ? $user->id : '' }}">
                </div>
                <div class="col-md-6">
                  <label for="lastname" class="form-label">Lastname</label>
                  <input type="text" class="form-control" name="lastname" value="{{ old('lastname', ($user ? $user->last_name : '')) }}">
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" value="{{ old('email', ($user ? $user->email : '')) }}">
                </div>
                <div class="col-6">
                    <label for="course" class="form-label">{{ __('Course') }}</label>
                    <select id="course"  name="course" class="form-select @error('course') is-invalid @enderror" aria-label="Default select example" required>
                        @foreach ($courses as $course)
                            <option value="{{$loop->index+1}}" {{$user->course_id == $loop->index+1 ? 'selected' : ''}}>{{$course->title}}</option>
                        @endforeach

                      </select>
                </div>
                <div class="col-6">
                    <label for="sub_course" class="form-label">{{ __('Sub Course') }}</label>
                    <select id="sub_course"  name="sub_course" class="form-select @error('sub_course') is-invalid @enderror" aria-label="Default select example" required>
                        @foreach ($sub_courses as $sub_course)
                            <option value="{{$loop->index+1}}" {{$user->sub_course_id == $loop->index+1 ? 'selected' : ''}}>{{$sub_course->title}}</option>
                        @endforeach
                        <option value="">None</option>

                      </select>
                </div>
                <div class="col-12">
                  <label for="catchphrase" class="form-label @error('catchphrase') invalid @enderror">Catchphrase</label>
                  <input type="text" class="form-control" name="catchphrase" value="{{ old('catchphrase', ($user ? $user->catchphrase : '')) }}">
                </div>
                <div class="col-md-12">
                  <label for="bio" class="form-label @error('bio') invalid @enderror">Bio</label>
                  <textarea type="text" class="form-control" name="bio" style="height: 200px" >{{ old('bio', ($user ? $user->bio : '')) }}</textarea>
                </div>
                <div class="col-md-12">
                    <label for="file" class="form-label">Image</label>
                    <input type="file" class="form-control" name="file">
                </div>
                <div class="col-6">
                    <label for="file" class="form-label">Image preview</label>
                    <img src="{{asset($user->profile)}}" alt="" class="img-fluid">
                </div>


                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
        </div>
    </div>


</div>

@endsection
