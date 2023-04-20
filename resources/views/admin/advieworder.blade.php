@extends('admin.header_footer')
@section('admin-body')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-header bg-primary">
                    <h3 class="card-title">VIEW ORDERS</h3>
                </div>
                <table id="example1" class="table   table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                    <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                First Name
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                Last Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                Address
                            </th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Phone
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                Email
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                Payement Method
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                Payment Status
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                userid
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                Total
                            </th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach($result as $value)
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">{{$value->fname}}</td>
                            <td class="dtr-control sorting_1" tabindex="0">{{$value->lname}}</td>
                            <td class="dtr-control sorting_1" tabindex="0">{{$value->address1}}(h)
                                <br> {{$value->address2}} <br> {{$value->city}} <br>{{$value->state}} <br> {{$value->zipcode}}
                            </td>
                            <td class="dtr-control sorting_1" tabindex="0">{{$value->phone}}</td>
                            <td class="dtr-control sorting_1" tabindex="0">{{$value->email}}
                            <td class="dtr-control sorting_1" tabindex="0">@if($value->method=="offline")Cash On Delivery @else Online Payment(card) @endif</td>
                            <td class="dtr-control sorting_1" tabindex="0">{{$value->paymentstatus}}</td>
                            <td class="dtr-control sorting_1" tabindex="0">{{$value->userid}}</td>
                            <td class="dtr-control sorting_1" tabindex="0">{{$value->total}}</td>
                            @if($value->paymentstatus=="notpayed")
                            <td><a href="/changestatus/{{$value->id}}"class="btn btn-dark my-5 ml-5" >Change Payment Status</a></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection