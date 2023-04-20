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
                        <h3 class="card-title">EDIT PRODUCT</h3>
                    </div>

                    @foreach($result as $value)
                    <form method="post" action="/addproducteditaction/{{$value->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="productname">Product Name</label>
                                <input type="text" class="form-control" name="productname" value="{{$value->productname}}" id="productname">
                            </div>
                            <div class="form-group">
                                
                                <div class="custom-file">

                                    <label for="productimage">product image</label>
                                    <input type="file" name="productimage" class="form-control" value="{{$value->productimage}}" id="productimage">

                                </div>

                            </div>
                            <div class="form-group">
                                <label for="producttype">Product type</label>
                                <input type="text" class="form-control" name="producttype" value="{{$value->producttype}}" id="producttype">
                            </div>
                            <div class="form-group">
                                <label for="productprice">Product Price</label>
                                <input type="text" class="form-control" name="productprice" value="{{$value->productprice}}" id="productprice">
                            </div>
                            <div class="form-group">
                                <label for="productexpdate">Product expDate</label>
                                <input type="date" class="form-control" name="productexpdate" value="{{$value->productexpdate}}" id="productexpdate">
                            </div>
                            <div class="form-group">
                                <label for="description">Product description</label>
                                <input type="text" class="form-control" name="description" value="{{$value->description}}" id="description">
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