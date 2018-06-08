<div class="blog-masthead">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark mb-4">
            <a class="navbar-brand" href="/">My blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/posts">All posts</a>
                    </li>
                </ul>
            </div>

            @if (auth()->check())

                <a href="#" class="nav-link">{{ auth()->user()->name }}</a>

                <a href="/posts/create"><button class="btn btn-default my-2 my-sm-0" type="submit">New post</button></a>

                <a class="nav-link" href="/logout"><span class="badge badge-light">Logout</span> </a>

            @else

                <a class="nav-link" href="/login"><span class=" badge badge-light">Login</span> </a>

            @endif
        </nav>
    </div>
</div>

