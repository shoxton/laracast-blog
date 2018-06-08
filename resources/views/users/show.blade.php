@extends ('layouts.master')

@section ('content')

    <div class="col-md-8">

        <h1>{{$user->name}} posts</h1>

        <hr>
        
        

            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-body">
                        <a href="/posts/{{ $post->id }}"><h4 class="card-title">{{ $post->title }}</h4></a>
                        <p class="card-text"><?= $post->body ; ?></p>
                    </div>
                </div><br>
            @endforeach

       


    </div>

@endsection