@extends('layouts.main')

@section('page-title', 'Contact me')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/contact/standard.css') }}">
    <link rel="stylesheet" media="screen and (max-width:480px)" href="{{ asset('css/contact/narrow.css') }}">
@endpush

@section('content')

@endsection
