@extends ('layouts.master')

@section ('content')

    <div class="col-md-8">
        <h1>Profile</h1>

        <div class="card">
            <form action="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="badge badge-dark" for="">Bio</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea><br>
                        </div>
                        <div class="col-md-6">
                            <label class="badge badge-dark" for="">Name</label><br>
                            <input type="text" value="<?php echo auth()->user()->name ; ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="badge badge-dark" for="">Email</label><br>
                            <input type="email" value="<?php echo auth()->user()->email ; ?>" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="badge badge-dark" for="">Registration date</label><br>
                            <?php echo auth()->user()->created_at->toFormattedDateString() ; ?>
                        </div>
                        <div class="col-md-6">
                            <label class="badge badge-dark" for="">Password</label><br>
                            <button class="btn btn-default">Reset password</button>
                        </div>
                    </div><br><hr>
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </form>
        </div>


    </div>

@endsection