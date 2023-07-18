@extends('layouts.layout', ['title' => "404 error"])

@section('content')

    <div class="card">
        <h2 class="card-header">This page does not exist or have deleted</h2>
        <img src="{{  asset('img/404.jpg') }}" alt="404 not found">
    </div>
    <a href="/" class="btn btn-outline-primary">Back to home page</a>

@endsection
