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
                <label for="create_post">Content</label>
                <textarea class="form-control" name="body" id="create_post" cols="30" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>

        </form>

    </div>

@endsection 

@section ('footer')

    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#create_post',
            theme: 'modern',
            height: 300,
            plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
        });
    </script>

@endsection