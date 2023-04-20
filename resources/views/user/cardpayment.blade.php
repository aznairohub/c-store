@extends('user.header_footer')
@section('user-body')
<br>
<div class="container">
    <div class='row'>

        <div class='col-md-4'></div>
        <div class="col-md-6">
            <form accept-charset="UTF-8" action="/cardpaymentaction" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="SET_YOUR_PUBLISHED_KEY_HERE" id="payment-form" method="post">
                @csrf
                <div class='form-row'>
                    <div class='col-md-12 form-group required'>
                        <label class='control-label'>Card Holder Name</label> <input class='form-control' type='text' name="cardname" placeholder="Enter Card Holder Name">
                    </div>
                </div>
                <div class='form-row'>
                    <div class='col-md-12 form-group  required'>
                        <label class='control-label'>Card Number</label> <input class='form-control' type='text' name="cardnumber" placeholder="Enter Card number">
                    </div>
                </div>
                <div class='form-row'>
                    <div class='col-md-3'>
                        <label class='control-label'>CVC</label> <input class='form-control' placeholder='CVV' size='4' type='password' name="cvc">
                    </div>
                    <div class='col-md-3'>
                        <label class='control-label'>Expiration</label> <input class='form-control' placeholder='MM' size='2' type='text' name="exp">
                    </div>
                    <div class='col-md-3'>
                        <label class='control-label'>YEAR</label> <input class='form-control' placeholder='YYYY' size='4' type='text' name="year">
                    </div>
                </div>
                <div class='col-md-12 form-group  required'>
                    @foreach($total as $value)
                    <label class='control-label'>total amount</label> <input class='form-control' readonly type='text' name="totalamount" value="{{$value->total}}">
                    @endforeach
                </div>

                <div class='form-row'>
                    <div class='col-md-12 form-group'>
                        <button class='form-control btn btn-primary submit-button' type='submit' style="margin-top: 10px;">Confirm</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection