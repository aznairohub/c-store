@extends('admin.header_footer')
@section('admin-body')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class=col-sm-3></div>
            <div class="col-md-9">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">EDIT GALLERY FORM</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @foreach($result as $value)
                    <form method="post" action="/addgalleryeditaction/{{$value->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$value->name}}" id="name">
                            </div>
                            <div class="form-group">
                                <div>
                                    <label for="image">Image</label>
                                    <input type="file" name="image" value="{{$value->image}}" id="image">
                                </div>
                                <!-- <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div> -->
                            </div>
                        </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">EDIT</button>
                </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
@endsection