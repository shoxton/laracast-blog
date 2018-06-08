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
                </ul>
            </div>

            @if (auth()->check())

                    <div class="dropdown show">
                        <button type="button" class="btn btn-light dropdown-toggle" aria-label="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i> {{ auth()->user()->name }}
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/posts/create">Create new post</a>
                            <a class="dropdown-item" href="/profile">Profile</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </div>
                    
            @else

                <a class="nav-link" href="/login"><span class=" badge badge-light">Login</span> </a>

            @endif
        </nav>
    </div>
</div>

