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
                        <h3 class="card-title">ADD PRODUCT</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="/addproductaction" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="productname">Product Name</label>
                                <input type="text" class="form-control" name="productname" id="productname">
                            </div>
                            <div class="form-group">
                              <div>
                                    <label for="productimage">Product Image</label>
                                    <input type="file" name="productimage" id="productimage" class="form-control">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="producttype">Product Type</label>
                                <input type="text" class="form-control" name="producttype" id="producttype">
                            </div>
                            <div class="form-group">
                                <label for="productprice">Product Price</label>
                                <input type="text" class="form-control" name="productprice" id="productprice">
                            </div>
                            <div class="form-group">
                                <label for="productexpdate">Product Expiry Date</label>
                                <input type="date" class="form-control" name="productexpdate" id="productexpdate">
                            </div>
                            <div class="form-group">
                                <label for="description">Product Description</label>
                                <input type="text" class="form-control" name="description" id="description">
                            </div>

                        </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">ADD PRODUCT</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection