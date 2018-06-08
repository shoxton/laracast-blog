<div class="blog-post">

    <div class="card">
        <div class="card-body">
            <a href="/posts/{{ $post->id }}">
                <h2 class="blog-post-title">{{ $post->title }}</h2>
            </a>
        
            <p class="blog-post-meta">
                <a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a> on
                {{ $post->created_at->toFormattedDateString() }}
            </p>
        
            <?= $post->body ;?>
        </div>
    </div>



    

</div><!-- /.blog-post -->