@extends('admin.header_footer')
@section('admin-body')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class=col-sm-3></div>
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">CHANGE PAYMENT STATUS</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @foreach($result as $value)
                    <form method="post" action="/changestatusaction/{{$value->id}}" >
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="productname">STATUS</label>
                                <input type="text" class="form-control" name="status" value="{{$value->paymentstatus}}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Change Status</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection