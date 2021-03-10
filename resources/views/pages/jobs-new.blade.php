@extends('layout')

@section('content')

<form action="{{ route('post-new-job') }}" method="POST">
@csrf
    <div class="container o-job-new-container">
        <div class="row m-job-new-container">
            <div class="col-12 col-md-6">

                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 m-new-job-label">
                        <label for="title" class="a-new-job-label">Title</label>
                    </div>
                    <div class="col-12 col-md-8 col-lg-9">
                        <input type="text" name="title" id="" class="a-new-job-input  @error('title') is-invalid @enderror" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 m-new-job-label">
                        <label for="deadline" class="a-new-job-label">Deadline</label>
                    </div>
                    <div class="col-12 col-md-8 col-lg-9">
                        <input type="date" name="deadline" id="" class="a-new-job-input a-new-job-input-deadline @error('deadline') is-invalid @enderror" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 m-new-job-label">
                        <label for="hashtags" class="a-new-job-label">Hashtags</label>
                    </div>
                    <div class="col-12 col-md-8 col-lg-9">
                        <input type="text" name="hashtags" id="" class="a-new-job-input @error('hashtags') is-invalid @enderror" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 m-new-job-label">
                        <label for="description" class="a-new-job-label">Description</label>
                    </div>
                    <div class="col-12 col-md-8 col-lg-9">
                        <textarea name="description" id="" class="a-new-job-input-textArea  @error('description') is-invalid @enderror" required></textarea>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">

                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 m-new-job-label">
                        <label for="first_name" class="a-new-job-label">Firstname</label>
                    </div>
                    <div class="col-12 col-md-8 col-lg-9">
                        <input type="text" name="first_name" id="" class="a-new-job-input @error('first_name') is-invalid @enderror" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 m-new-job-label">
                        <label for="last_name" class="a-new-job-label">Lastname</label>
                    </div>
                    <div class="col-12 col-md-8 col-lg-9">
                        <input type="text" name="last_name" id="" class="a-new-job-input @error('lastname') is-invalid @enderror" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 m-new-job-label">
                        <label for="email" class="a-new-job-label">Email</label>
                    </div>
                    <div class="col-12 col-md-8 col-lg-9">
                        <input type="email" name="email" id="" class="a-new-job-input @error('email') is-invalid @enderror" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 m-new-job-label">
                        <label for="phone" class="a-new-job-label">Telefoon</label>
                    </div>
                    <div class="col-12 col-md-8 col-lg-9">
                        <input type="text" name="phone" id="" class="a-new-job-input @error('phone') is-invalid @enderror" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 o-new-job-button">
                <button type="submit" class="a-new-job-button">plaats</button>
            </div>
        </div>
    </div>
</form>

@endsection
