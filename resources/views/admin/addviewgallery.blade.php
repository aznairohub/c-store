@extends('admin.header_footer')
@section('admin-body')

<div class="content-wrapper" style="min-height: 1302.25px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">VIEW GALLERY </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1"
                                    class="table table-bordered table-striped dataTable dtr-inline collapsed"
                                    aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">
                                                ID</th>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">
                                                NAME</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending">
                                                IMAGE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($result as $value)
                                        <tr class="odd">
                                        <td>{{$value->id}}</td>
                                            <td>{{$value->name}}</td>
                                            <td><img src="/uploads/{{$value->image}}" alt="Trulli" width="150" height="150">{{$value->image}}</td>
                                           
                                            <td><a href="/addgalleryedit/{{$value->id}}"class="btn btn-dark my-5 ml-5" >EDIT</a></td>
                                            <td><a href="/addgallerydelete/{{$value->id}}"class="btn btn-dark my-5 ml-5" >delete</a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
</div>
<!-- /.container-fluid -->
</section>
@endsection