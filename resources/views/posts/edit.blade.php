@extends('layouts.layout', ['title' => "Updating post $post->post_id"])
@section('content')
    <form action="{{ route('post.update', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h3>Update post</h3>
        @include('posts.parts.form')
        <input type="submit" value="Update post" class="btn btn-outline-success">
    </form>
@endsection
