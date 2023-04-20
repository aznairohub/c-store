@extends('user.header_footer')
@section('user-body')
<div class="container" style="display: flex; flex-direction: coloum">
    @foreach($result as $value)
    <form method="post" action="/addtocartaction/{{$value->id}}" enctype="multipart/form-data">
        @csrf
        <div class="fashion_section_2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box_main">
                        <h1 class="shirt_text">{{$value->productname}}</h1>
                        <h4 class="ext">{{$value->producttype}}</h4>
                        <p class="price_text">${{$value->productprice}}<span style="color: #262626;"></span></p>
                        <div class="tshirt_img"><img src="/uploads/{{$value->productimage}}" >
                        </div>
                        Quantity: <input type="number" class="form-control" name="quantity" id="quantity" value="1" min="1"><br><br>
                        price : <input type="text" class="form-control" id="price" value="{{$value->productprice}}">
                        <h1>Total</h1>

                        <input type="number" name="total" class="form-control my-3" id="demo" readonly>
                    
                        <script type="text/javascript">
                        {
                            document.getElementById('quantity').onchange = function() {
                                var quantity = document.getElementById('quantity').value;
                                var price = document.getElementById('price').value;
                                var total = parseInt(quantity) * parseInt(price);
                                document.getElementById("demo").value= total;
                            }
                        }
                        </script>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">ADD To CART</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection