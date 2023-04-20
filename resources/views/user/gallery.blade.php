@extends('user.header_footer')
@section('user-body')

<div class="container">
   
    <div class="gallery">
        <div class="fashion_section_2">
            <div class="row">
            @foreach($result as $value)
                <div class=" col-sm-3">
                    <div class="box_main">
                        <div class="img"><img src="/uploads/{{$value->image}}" alt="image" height="200px" width="200px">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
 
</div>
@endsection
