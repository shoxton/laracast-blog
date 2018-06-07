@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8 blog-main">

        <h1>Publish Post</h1>

        <hr>

        @include ('layouts.errors')

        <form method="POST" action="/posts">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input required type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="body">Content</label>
                <textarea required class="form-control" name="body" id="post_body" cols="30" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>

        </form>

    </div>

@endsection