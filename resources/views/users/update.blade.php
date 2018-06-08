@extends ('layouts.master')

@section ('content')

    <div class="col-md-8">
        <h1>Profile</h1>

        <div class="card">
            <div class="card-body">
                <div><label class="badge badge-dark" for="">Name</label><br>
                    <?php echo auth()->user()->name ; ?>
                </div><br><hr>
                <div><label class="badge badge-dark" for="">Email</label><br>
                    <?php echo auth()->user()->email ; ?>
                </div><br><hr>
                <div><label class="badge badge-dark" for="">Registration date</label><br>
                    <?php echo auth()->user()->created_at->toFormattedDateString() ; ?>
                </div>
            </div>

        </div>


    </div>

@endsection