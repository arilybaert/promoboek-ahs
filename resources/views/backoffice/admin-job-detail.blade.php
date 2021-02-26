@extends('layouts.app-admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                {{ $job->title}}
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form class="row g-3" action="{{ route('admin.jobs.detail.save', $job->id )}}" method="POST">
                @csrf
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" value="{{ old('title', ($job ? $job->title : '')) }}">
                  <input type="hidden" class="form-control" id="id" name="id" value="{{ $job ? $job->id : '' }}">
                </div>
                <div class="col-md-6">
                  <label for="tags" class="form-label">Tags</label>
                  <input type="text" class="form-control" name="tags" value="{{ old('tags', ($job ? $job->tags : '')) }}">
                </div>
                <div class="col-md-6">
                    <label for="first_name" class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name', ($job ? $job->first_name : '')) }}">
                </div>
                <div class="col-md-6">
                    <label for="last_name" class="form-label">Lastname</label>
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name', ($job ? $job->last_name : '')) }}">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email', ($job ? $job->email : '')) }}">
                </div>
                <div class="col-md-6">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" class="form-control" name="deadline" value="{{ old('deadline', ($job ? $job->deadline : '')) }}">
                </div>
                <div class="col-md-12">
                  <label for="content" class="form-label @error('content') invalid @enderror">Description</label>
                  <textarea type="text" class="form-control" name="content" style="height: 200px" >{{ old('description', ($job ? $job->content : '')) }}</textarea>
                </div>


                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
        </div>
    </div>


</div>

@endsection
