@extends ('layouts.master')

@section ('content')

    <div class="col-sm-8">

        <div class="card">
            <div class="card-body">

                <h1>Register</h1>

                <hr>
        
                <form action="/register" method="POST">
        
                    {{ csrf_field() }}
        
                    @include ('layouts.errors')
        
                    <div class="row">
        
                        <div class="form-group col-12">
                            <label for="name">Name</label>
                            <input required type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                        </div>
        
                        <div class="form-group col-12">
                            <label for="email">Email</label>
                            <input required type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="">
                        </div>
        
                        <div class="form-group col-6">
                            <label for="password">Password</label>
                            <input required type="password" class="form-control" name="password" id="password" placeholder="">
                        </div>
        
                        <div class="form-group col-6">
                            <label for="password_confirmation">Password confirmation</label>
                            <input required type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="">
                        </div>
        
                    </div>
        
                    <button type="submit" class="btn btn-primary">Register</button>
        
                </form>

            </div>
        </div>



    </div>


@endsection