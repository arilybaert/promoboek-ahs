@extends('layout')

@section('content')


<div class="o-job-new-container">
    <div class="row">
        <div class="col-6">
            <div class="col-12 m-new-job-input">
                <label for="title" class="a-new-job-label">Title</label>
                <input type="text" name="title" id="" class="a-new-job-input">
            </div>
            <div class="col-12 m-new-job-input">
                <label for="deadline" class="a-new-job-label">Deadline</label>
                <input type="date" name="deadline" id="" class="a-new-job-input a-new-job-input-deadline">
            </div>
            <div class="col-12 m-new-job-input">
                <label for="hashtags" class="a-new-job-label">Hashtags</label>
                <input type="text" name="hashtags" id="" class="a-new-job-input">
            </div>
            <div class="col-12 m-new-job-input">
                <label for="description" class="a-new-job-label">Omschrijving</label>
                <textarea name="description" id="" class="a-new-job-input-textArea"></textarea>
            </div>
        </div>

        <div class="col-6">
            <div class="col-12 m-new-job-input">
                <label for="name" class="a-new-job-label">Name</label>
                <input type="text" name="name" id="" class="a-new-job-input">
            </div>
            <div class="col-12 m-new-job-input">
                <label for="lastname" class="a-new-job-label">Naam</label>
                <input type="text" name="lastname" id="" class="a-new-job-input">
            </div>
            <div class="col-12 m-new-job-input">
                <label for="email" class="a-new-job-label">Email</label>
                <input type="email" name="email" id="" class="a-new-job-input">
            </div>
            <div class="col-12 m-new-job-input">
                <label for="phone" class="a-new-job-label">Telefoon</label>
                <input type="text" name="phone" id="" class="a-new-job-input">
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-12 o-new-job-button">
            <button type="submit" class="a-new-job-button">plaats</button>
        </div>
    </div>
</div>
@endsection
