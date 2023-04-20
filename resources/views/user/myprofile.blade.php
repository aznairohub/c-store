@extends('user.header_footer')
@section('user-body')
<section class="content">
    <div class="container-fluid">
        <div class="row py-5">
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Register Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @foreach($result as $value)
                    <form method="post" action="/myprofileaction/{{$value->id}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" name="fullname" value="{{$value->fullname}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$value->email}}">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" class="form-control" name="contact" value="{{$value->contact}}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" value="{{$value->password}}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection