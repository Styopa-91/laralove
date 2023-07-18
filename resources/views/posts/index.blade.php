@extends('layouts.layout', ['title' => 'Home page'])

@section('content')
    @if((isset($_GET['search'])) && ($_GET['search']!=''))
        @if(count($posts)>0)
            <h2>Results by request "<?=htmlspecialchars($_GET['search']) ?>"</h2>
            <p class="lead">There is finded {{ count($posts) }} posts</p>
        @else
            <h2>by request "<?=htmlspecialchars($_GET['search']) ?>" nothing was finded</h2>
            <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Show all posts</a>
        @endif
    @endif

    <div class="row">
        @foreach($posts as $post)
        <div class="col-6">
            <div class="card">
                <div class="card-header"><h2>{{ $post->short_title }}</h2></div>
                <div class="card-body">
                    <div class="card-img" style="background-image: url({{$post->img ?? asset('img/default.png')}})"></div>
                    <div class="card-author">Author: {{$post->name}}</div>
                    <a href="{{ route('post.show', ['id' => $post->post_id]) }}" class="btn btn-outline-primary">Show post</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @if(!isset($_GET['search'])||$_GET['search']=='')
    {{ $posts->links() }}
    @endif
@endsection
