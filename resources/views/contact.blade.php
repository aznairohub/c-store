@extends('header_footer')
@section('user-body') @section('user-body')
<section class="content">
    <div class="container-fluid-5">
        <div class="inner" style="padding:20px" ;>
            <div class="row py-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Contact Us</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="/contactaction">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Enter full name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label for="contact">contact</label>
                                    <input type="text" class="form-control" name="contact" placeholder="contact">
                                </div>
                                <div class="form-group">
                                    <label for="message">message</label>
                                    <textarea id="message" name="message" class="form-control" placeholder="Enter Text Here....">
                                    </textarea>

                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection