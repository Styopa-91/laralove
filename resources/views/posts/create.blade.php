@extends('layouts.layout', ['title' => "Creating new post"])
@section('content')
    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Create post</h3>
        @include('posts.parts.form')
        <input type="submit" value="Create post" class="btn btn-outline-success">
    </form>
@endsection
