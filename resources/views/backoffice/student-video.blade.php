@extends('layouts.app-student')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Edit Video
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form class="row g-3" action="{{ route('portfolio.video.edit', $video->id )}}" method="POST">
                @csrf
                <div class="col-4">
                    <label for="">Video</label>
                    <video style="width: 100%; height: auto; object-fit: scale-down;" controls>
                        <source src="{{asset($video->url)}}" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                </div>
                <div class="col-4 offset-2" >
                    <label for="">Thumbnail</label>

                    <img src="{{ asset($video->thumbnail_image)}} " alt="" style="width: 100%; height: auto; object-fit: scale-down;">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" value="{{ old('title', ($video ? $video->title : '')) }}">
                  <input type="hidden" class="form-control" id="id" name="id" value="{{ $video ? $video->id : '' }}">
                </div>
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="thumbnail" id="thumbnail" {{ $video->thumbnail ? 'checked' : '' }}>
                        <label class="form-check-label" for="thumbnail">Thumbnail images</label>
                    </div>
                </div>
                <div class="col-md-12">
                  <label for="description" class="form-label @error('description') invalid @enderror">Description</label>
                  <textarea type="text" class="form-control" name="description" style="height: 200px" >{{ old('description', ($video ? $video->content : '')) }}</textarea>
                </div>


                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
        </div>
    </div>


</div>

@endsection
