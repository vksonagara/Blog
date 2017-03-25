@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Posts</div>

                <div class="panel-body">
                    <ul>
                        @foreach ($posts as $post)
                          <li>{{ $post->title }} <a href="/posts/delete/{{ str_slug($post->title) }}" class="ask">Delete</a>
                          <a href="/posts/update/{{ str_slug($post->title) }}">Update</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection