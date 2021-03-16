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
            <form class="row g-3" action="{{ route('portfolio.image.create' )}}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="file" class="form-label">Image</label>
                    <input type="file" class="form-control" name="file" accept="image/*">
                </div>
                <div class="col-8"></div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title">
                  <input type="hidden" class="form-control" id="id" name="id" >
                </div>
                <div class="col-md-6">
                  <label for="tags" class="form-label">Tags</label>
                  <input type="text" class="form-control" name="tags">
                </div>
                @if ($user->course_id === 3)
                <div class="col-md-6">
                    <label for="href" class="form-label">Url</label>
                    <input type="text" class="form-control" name="href" value="" placeholder="https://www.yoursite.com">
                </div>
                @endif
                <div class="col-md-6">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="thumbnail" id="thumbnail">
                        <label class="form-check-label" for="thumbnail">Thumbnail image (By activating this you will set this image as your main image on the homepage of your course)</label>
                    </div>
                </div>
                <div class="col-md-12">
                  <label for="description" class="form-label @error('description') invalid @enderror">Description</label>
                  <textarea type="text" class="form-control" name="description" style="height: 200px" ></textarea>
                </div>


                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
        </div>
    </div>


</div>

@endsection
