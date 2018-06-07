@extends ('layouts.master')

@section ('content')

<div class="col-sm-8 blog-main">

    <h1>{{ $post->title }}</h1>

    <?= $post->body; ?>

    <hr>
    <h3>Comments</h3>

    <div class="comments">
        <ul class="list-group">

            @foreach ($post->comments as $comment)

                <li class="list-group-item">
                    {{ $comment->body }}<br>
                    <span class="badge">{{ $comment->created_at->diffForHumans() }}</span>
                    
                </li>

            @endforeach

        </ul>

    </div>
    
</div>

@endsection