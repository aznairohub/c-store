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
                        <h3 class="card-title">ADD GALLERY</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="/addgalleryaction" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div>
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">ADD IMAGES</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection