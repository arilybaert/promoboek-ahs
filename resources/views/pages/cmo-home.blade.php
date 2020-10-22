@extends('layout')

@section('content')
<h1 class="a-page-title">CMO Portfolios</h1>
<div class="o-cmo-portfolio">

    @foreach ( $students as $student)
        <a href="/portfolio-cmo/rick" class="o-card">
            <img src="{{ $student->thumbnail}}" alt="" class="a-cmo-image">
            <h2 class="a-cmo-card-name">{{ $student->first_name . ' ' . $student->last_name }}</h2>
            <p class="a-cmo-tagline">{{ $student->catchphrase}}</p>

        </a>

    @endforeach
    {{-- <a href="/portfolio-cmo/rick" class="o-card">
        <img src="https://i0.wp.com/www.geek-art.net/wp-content/uploads/2017/01/Dan-Mumford-Im-starting-to-work-up-some-anxiety-about-this-whole-thing.jpg?fit=772%2C1024&ssl=1" alt="" class="a-cmo-image">
        <h2 class="a-cmo-card-name">Rick Sanchez</h2>
        <p class="a-cmo-tagline">Student of the game</p>

    </a>
    <a href="/portfolio-cmo/rick" class="o-card">
        <img src="https://i0.wp.com/www.geek-art.net/wp-content/uploads/2017/01/Dan-Mumford-Im-starting-to-work-up-some-anxiety-about-this-whole-thing.jpg?fit=772%2C1024&ssl=1" alt="" class="a-cmo-image">
        <h2 class="a-cmo-card-name">Rick Sanchez</h2>
        <p class="a-cmo-tagline">Student of the game</p>
    </a>
    <a href="/portfolio-cmo/rick" class="o-card">
        <img src="https://i0.wp.com/www.geek-art.net/wp-content/uploads/2017/01/Dan-Mumford-Im-starting-to-work-up-some-anxiety-about-this-whole-thing.jpg?fit=772%2C1024&ssl=1" alt="" class="a-cmo-image">
        <h2 class="a-cmo-card-name">Rick Sanchez</h2>
        <p class="a-cmo-tagline">Student of the game</p>
    </a> --}}
</div>

@endsection
