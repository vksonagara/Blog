@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Dashboard</h2></div>

                <div class="panel-body">
                    <p><a href="/post/create">Add new post</a></p>
                    <p><a href="/{{ Auth::user()->name }}/posts">My posts</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
