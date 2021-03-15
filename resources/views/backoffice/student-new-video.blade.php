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
            <form class="row g-3" action="{{ route('portfolio.video.create' )}}" method="POST"  enctype="multipart/form-data" id="form">
                @csrf
                <div class="col-md-6">
                    <label for="file" class="form-label">Video</label>
                    <input type="file" class="form-control" name="file" accept="video/*">
                </div>
                <div class="col-md-6">
                    <label for="file" class="form-label">Thumbnail</label>
                    <input type="file" class="form-control" name="file_thumbnail" accept="image/*">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title">
                  <input type="hidden" class="form-control" id="id" name="id" >
                </div>
                <div class="col-md-6">
                  {{-- <label for="tags" class="form-label">Tags</label>
                  <input type="text" class="form-control" name="tags"> --}}
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="thumbnail" id="thumbnail">
                        <label class="form-check-label" for="thumbnail">Thumbnail images</label>
                    </div>
                </div>
                <div class="col-md-12">
                  <label for="description" class="form-label @error('description') invalid @enderror">Description</label>
                  <textarea type="text" class="form-control" name="description" style="height: 200px" ></textarea>
                </div>

                <div class="col-12">
                    <div class="progress">

                        <div class="bar"></div >

                        <div class="percent">0%</div >

                    </div>

                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
        </div>
    </div>


</div>

@endsection
