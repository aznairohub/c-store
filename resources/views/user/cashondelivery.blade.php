@extends('user.header_footer')
@section('user-body')
<div class="fashion_section">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="font-family: Times New Roman, Times, serif">
                <h1 class="fashion_taital">Men & Women Fashion</h1>
                <div class="container" style="display: flex; flex-direction: coloum">

                    <table id="example1" class="table   table-bordered table-striped dataTable dtr-inline collapsed"
                        aria-describedby="example1_info">
                        <thead>
                            <tr>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending">
                                    Product Name
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">
                                    Product Image
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">
                                    Product Price
                                </th>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending">
                                    Quantity
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">
                                    Total
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($result as $value)
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">{{$value->productname}}</td>
                                <td class="dtr-control sorting_1" tabindex="0"><img
                                        src="/uploads/{{$value->productimage}}" alt="Image" width="200" height="200">
                                </td>
                                <td class="dtr-control sorting_1" tabindex="0">{{$value->productprice}}</td>
                                <td class="dtr-control sorting_1" tabindex="0">{{$value->quantity}}</td>
                                <td class="dtr-control sorting_1" tabindex="0">{{$value->total}}</td>

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
                </button>
            </div><br><br>
            @endforeach
            <div style=" text-align: center;">
                <button class="btn btn-success"><a href="/buynow/{{$value->id}}">CONFIRM ORDER</a></button>
            </div>
            <br><br>
        </div>
    </div>
    @endsection