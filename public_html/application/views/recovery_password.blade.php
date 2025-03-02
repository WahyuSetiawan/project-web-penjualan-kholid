@extends('part/template', $head)

@section('content')
<section id="shopgrid" class="shop shop-grid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Recovery Password</h2>
            </div>
            <div class="col-sm-12">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="new_password" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="new_password_repeat" placeholder="Repeate New Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection