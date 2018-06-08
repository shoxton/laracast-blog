@extends ('layouts.master')

@section ('content')

    <div class="col-md-8">

        <div class="card">
            <div class="card-body">
                <h1>Login</h1>
                
                <span>Not registered yet? <a class="btn btn-sm btn-primary" href="/register" role="button">Register</a></span>
        
                <hr>
                
                <form action="/login" method="POST">
        
                    @include ('layouts.errors')
        
                    {{ csrf_field() }}
        
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="">
                    </div>
        
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="">
                    </div>
        
                    <button type="submit" class="btn btn-primary">Login</button>
        
                </form>
            </div>
        </div>



    </div>

@endsection