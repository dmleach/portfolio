@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <div class="home-content">
        <img src="{{ asset('images/headshot.jpeg') }}" alt="A picture of Dave" />
        <p class="home-content-text">
            Hi! I'm Dave Leach a developer who creates webpages using PHP and desktop software using Delphi. I live in
            Seattle, Washington.
        </p>
    </div>
@endsection

