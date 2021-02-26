@extends('layout')

@section('content')

<form action="{{ route('post-new-job') }}" method="POST">
@csrf
    <div class="o-job-new-container">
        <div class="row">
            <div class="col-6">
                <div class="col-12 m-new-job-input">
                    <label for="title" class="a-new-job-label">Title</label>
                    <input type="text" name="title" id="" class="a-new-job-input  @error('title') is-invalid @enderror" required>
                </div>
                <div class="col-12 m-new-job-input">
                    <label for="deadline" class="a-new-job-label">Deadline</label>
                    <input type="date" name="deadline" id="" class="a-new-job-input a-new-job-input-deadline @error('deadline') is-invalid @enderror" required>
                </div>
                <div class="col-12 m-new-job-input">
                    <label for="hashtags" class="a-new-job-label">Hashtags</label>
                    <input type="text" name="hashtags" id="" class="a-new-job-input @error('hashtags') is-invalid @enderror" required>
                </div>
                <div class="col-12 m-new-job-input">
                    <label for="description" class="a-new-job-label">Omschrijving</label>
                    <textarea name="description" id="" class="a-new-job-input-textArea  @error('description') is-invalid @enderror" required></textarea>
                </div>
            </div>

            <div class="col-6">
                <div class="col-12 m-new-job-input">
                    <label for="first_name" class="a-new-job-label">Firstname</label>
                    <input type="text" name="first_name" id="" class="a-new-job-input @error('first_name') is-invalid @enderror" required>
                </div>
                <div class="col-12 m-new-job-input">
                    <label for="last_name" class="a-new-job-label">Lastname</label>
                    <input type="text" name="last_name" id="" class="a-new-job-input @error('lastname') is-invalid @enderror" required>
                </div>
                <div class="col-12 m-new-job-input">
                    <label for="email" class="a-new-job-label">Email</label>
                    <input type="email" name="email" id="" class="a-new-job-input @error('email') is-invalid @enderror" required>
                </div>
                <div class="col-12 m-new-job-input">
                    <label for="phone" class="a-new-job-label">Telefoon</label>
                    <input type="text" name="phone" id="" class="a-new-job-input @error('phone') is-invalid @enderror" required>
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
