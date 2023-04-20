@extends('admin.header_footer')
@section('admin-body')

<div class="content-wrapper">
 
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-10">
            <div class="card-header bg-primary">
                    <h3 class="card-title">VIEW PRODUCTS</h3>
                </div>
                    <table id="example1" class="table   table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                        <thead>
                            <tr>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                    NAME
                                </th>
                                 
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                    IMAGE
                                </th>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">
                                    TYPE
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                   PRICE
                                </th>
                               <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                   EXPIRY DATE
                                </th>
                                
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"  colspan="1" aria-label="Browser: activate to sort column ascending">
                                   DESCRIPTION
                                </th>  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($result as $value)
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">{{$value->productname}}</td>
                                <td class="dtr-control sorting_1" tabindex="0"><img src="/uploads/{{$value->productimage}}" alt="Trulli" width="150" height="150"></td>
                                <td class="dtr-control sorting_1" tabindex="0">{{$value->producttype}}</td>
                                <td class="dtr-control sorting_1" tabindex="0">{{$value->productprice}}</td>
                                <td class="dtr-control sorting_1" tabindex="0">{{$value->productexpdate}}</td>
                                    
                                <td class="dtr-control sorting_1" tabindex="0">{{$value->description}}</td>
                                         
                                <td class="dtr-control sorting_1 text-dark" tabindex="0"><a href="/addproductedit/{{$value->id}}"class="btn btn-dark" >EDIT</a></td>
                                <td class="dtr-control sorting_1 text-dark" tabindex="0"><a href="/addproductdelete/{{$value->id}}"class="btn btn-dark" >delete</a></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection