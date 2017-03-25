@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                    @foreach ($posts as $post)
                        <div class="post-preview">
                            <a href="/posts/{{ str_slug($post->title) }}">
                                <h2 class="post-title">
                                    {{ $post->title }}
                                </h2>
                            </a>
                            <p class="post-meta">
                                Posted by 
                                <a href="#">
                                    {{ $post->user->name }}    
                                </a> 
                                on {{ $post->updated_at->toDayDateTimeString() }}
                            </p>
                        </div>
                        <hr>
                    @endforeach

                    <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
                
        </div>
    </div>
</div>
@endsection

