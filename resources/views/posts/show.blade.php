@extends ('layouts.master')

@section ('content')

<div class="col-sm-8 blog-main">

    <h1>{{ $post->title }}</h1>

    <?= $post->body; ?>

    <hr>

    <h3>Comments</h3>

    <div class="comments">

        @if (count($post->comments))

            <ul class="list-group">

                @foreach ($post->comments as $comment)

                    <li class="list-group-item">
                        <span class="badge badge-dark">{{ $comment->user->name }}</span><br>
                        {{ $comment->body }}<br>
                        <span class="badge">{{ $comment->created_at->diffForHumans() }}</span>
                        
                    </li>

                @endforeach

            </ul>

            

        @else

            <p>No comments yet.</p>

        @endif

    </div>

    <hr>

    @if (auth()->check())

        <h3><label for="body">Leave a comment</label></h3>

        <div id="comment" class="card">

            <div class="card-body">

                @include ('layouts.errors')

                <form action="/posts/{{ $post->id }}/comments" method="POST">

                    {{ csrf_field() }}

                    <div class="form-group">

                        <textarea required class="form-control" name="body" id="body" cols="30" placeholder="Your comment here."></textarea>
                    
                    </div>

                    <div class="form-group">
        
                        <button type="submit" class="btn btn-primary">Add comment</button>

                    </div>

                </form>

            </div>
            
        </div>
    
    @else
    
        <a href="/login">Login to comment</a>

    @endif
    
</div>

@endsection