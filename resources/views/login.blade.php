@extends('header_footer')
@section('user-body')
<section class="content">
    <div class="container-fluid-5" style="padding:20px">
        <div class="inner">
                <!-- left column -->
                <div class="row py-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">User Login</h3>
                            </div>
                            <form method="post" action="/userloginaction">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">password</label>
                                        <input type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">LOGIN</button>
                                        <input type="reset" value="clear" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>
@endsection