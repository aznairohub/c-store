@extends('header_footer') 
@section('user-body') 
<section class="content">
    <div class="container-fluid" style="font-family: Times New Roman, Times, serif; font-size: 20px">
        <div class="row py-5">
            <div class=" col-sm-6">
                <div class="inner">
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table id="example1">
                                <thead>
                                    <tr>
                                        <th style="text-align:center" ;>
                                            <h1 style="font-family:Times New Roman, Times, serif; font-weight: bold"><u>About Us</u></h1>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        @foreach($result as $value)
                                        <td>{{$value->description}}</td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="inner" style="padding:30px" ;>
                    <div class="item2"><img src="/uploads/download.jpeg" alt="image" width="700" height="700"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection