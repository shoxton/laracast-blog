@extends ('layouts.master')

@section ('content')

    <div class="col-md-8">
        <h1>Users</h1>

        <hr>

        <ul class="list-group">           

            @foreach ($users as $user)

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
                    {{-- <span class="badge badge-secondary badge-pill">pill1</span> --}}
                </li>

            @endforeach

        </ul>

    </div>

@endsection