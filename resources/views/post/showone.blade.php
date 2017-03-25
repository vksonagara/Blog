@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>{{ $post->title }}</h2>
                    <p class="post-meta">
                                Posted by 
                                <a href="#">
                                    {{ $post->user->name }}    
                                </a> 
                                on {{ $post->updated_at->toDayDateTimeString() }}
                            </p>
                </div>

                <div class="panel-body">
                    <?php echo $post->body; ?>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Comments:</h4>
                </div>
                <div class="panel-body">

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


