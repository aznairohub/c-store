@extends('user.header_footer')
@section('user-body')
<div class="page-header breadcrumb-wrap">

</div>
<section class="mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-sm-15">
            </div>
            <div class="col-lg-6">


            </div>
        </div>
        <div class="row py-5">
            <div class="col-12">
                <div class="divider mt-50 mb-50"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-25">
                    <h4>Billing Details</h4>
                </div>
                <form method="post" action="/buynowaction">
                    @csrf
                    <div class="form-group">
                        <label >First Name</label>
                        <input type="text" class="form-control" name="fname" required id="fname" placeholder="First name *">
                    </div>
                    <div class="form-group">
                        <label >Last Name</label>
                        <input type="text" class="form-control" required name="lname" id="lname" placeholder="Last name *">
                    </div>

                    <div class="form-group">
                        <label >Address-1</label>
                        <input type="text" class="form-control" name="address1" id="address1" required placeholder="Address *">
                    </div>
                    <div class="form-group">
                        <label >Address-2</label>
                        <input type="text" class="form-control" name="address2" id="address2" required placeholder="Address line2">
                    </div>
                    <div class="form-group">
                        <label >City</label>
                        <input required type="text" class="form-control" name="city" id="city" placeholder="City / Town *">
                    </div>
                    <div class="form-group">
                        <label >State</label>
                        <input required type="text" class="form-control" name="state" id="state" placeholder="State / County *">
                    </div>
                    <div class="form-group">
                        <label >Postcode / ZIP</label>
                        <input required type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Postcode / ZIP *">
                    </div>
                    <div class="form-group">
                        <label >Phone</label>
                        <input required type="text" class="form-control" name="phone" id="phone" placeholder="Phone *">
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input required type="text" class="form-control" name="email" id="email" placeholder="Email address *">
                    </div>
                    <div class="form-group">
                        <label >Payment Method</label>
                        <select required type="text" class="form-control" name="method" id="method">
                            <option value="online">Online Payemnt</option>
                            <option value="offline">Cash On Delivery</option>
                        </select>
                    </div>

            </div>
            <div class="col-md-6">
                <div class="order_review">
                    <div class="table-responsive order_table text-center">
                        <div class="container" style="display: flex; flex-direction: coloum">

                            <table id="example1" class="table  table-borderless table-striped " aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th >
                                            Product Name
                                        </th>

                                        <th >
                                            Product Image
                                        </th>
                                        <th >
                                            Product Price
                                        </th>
                                        <th >
                                            Quantity
                                        </th>
                                        <th >
                                            Total
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result as $value)
                                    <tr class="odd">
                                        <td  tabindex="0">{{$value->productname}}</td>
                                        <td  tabindex="0"><img src="/uploads/{{$value->productimage}}" alt="Image" width="200" height="200">
                                        </td>
                                        <td  tabindex="0">{{$value->productprice}}</td>
                                        <td  tabindex="0">{{$value->quantity}}</td>
                                        <td  tabindex="0">{{$value->total}}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @foreach($sum as $value)
                    <div class="amount" style=" text-align: right; ">
                        <button class="btn btn-gray">
                            <h2 style=" padding: 10px; text-transform: bold">Total amount = {{$value->psum}}</h2>
                            <input type="hidden" name="total" value="{{$value->psum}}">
                        </button>
                    </div><br><br>
                    @endforeach
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">CHECK OUT</button>
                    </div>
                    </form>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</section>
</main>
@endsection