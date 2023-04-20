@extends('admin.header_footer')
@section('admin-body')

<section class="content">
    <div class="container-fluid">
        <div class="row py-4 px-4">
            <!-- left column -->
            <div class=col-sm-3></div>
            <div class="col-md-9">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">EDIT ABOUT FORM</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @foreach($result as $value)
                    <form method="post" action="/addabouteditaction/{{$value->id}}" >
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$value->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <input type="text-area" class="form-control" name="description" value="{{$value->description}}">
                            </div>
                            
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary w-100">EDIT </button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection