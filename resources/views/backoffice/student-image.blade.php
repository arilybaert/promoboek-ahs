@extends('layouts.app-student')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Edit image
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form class="row g-3" action="{{ route('portfolio.image.edit', $image->id )}}" method="POST">
                @csrf
                <div class="col-4">
                    <img src="{{asset($image->url)}}" alt="" style="width: 100%; height: auto; object-fit: scale-down;">
                </div>
                <div class="col-8"></div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" value="{{ old('title', ($image ? $image->title : '')) }}">
                  <input type="hidden" class="form-control" id="id" name="id" value="{{ $image ? $image->id : '' }}" required>
                </div>
                <div class="col-md-6">
                  <label for="tags" class="form-label">Tags</label>
                  <input type="text" class="form-control" name="tags" value="{{ old('tags', ($image ? $image->tags : '')) }}" required>
                </div>
                @if ($image->user->course_id === 3)
                <div class="col-md-6">
                    <label for="href" class="form-label">Url</label>
                    <input type="text" class="form-control" name="href" value="{{ old('href', ($image ? $image->href : '')) }}" placeholder="https://www.yoursite.com">
                </div>
                @endif
                <div class="col-md-6">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="thumbnail" id="thumbnail" {{ $image->thumbnail ? 'checked' : '' }}>
                        <label class="form-check-label" for="thumbnail">Thumbnail images</label>
                    </div>
                </div>
                <div class="col-md-12">
                  <label for="description" class="form-label @error('description') invalid @enderror">Description</label>
                  <textarea type="text" class="form-control" name="description" style="height: 200px" required>{{ old('description', ($image ? $image->content : '')) }}</textarea>
                </div>


                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
        </div>
    </div>


</div>

@endsection
