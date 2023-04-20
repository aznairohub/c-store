<?php

namespace App\Http\Controllers;

use App\Models\addgallery;
use App\Models\addtocart;
use App\Models\buynow;
use App\Models\carddetail;
use App\Models\cart;
use App\Models\cart1;
use App\Models\placeorder;
use App\Models\placeorderuser;
use App\Models\product;
use App\Models\register;
use App\Models\viewcart;
use Faker\Provider\Payment;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {
      return view('user.index');
    }
    public function product()
    {
      $data['result'] = product::get();
      return view('user.product',$data);
      
    }
    public function gallery()
    {
      $data['result'] = addgallery::get();
      return view('user.gallery',$data);
      
    }
    public function addtocart($id)
    {
    $data['result'] = product::where('id',$id)->get();
      return view('user.addtocart',$data);
    }

    public function addtocartaction(Request $req,$id)
    {
    $userid=session('sess');
    $quantity = $req->input('quantity');
    $total = $req->input('total'); 

    $data = [
      'product_id'=>$id,
      'userid'=>$userid,
      'quantity' => $quantity,
      'total' => $total
    ];
     
      viewcart::insert($data);
      return redirect('cart');
    }
public function cart()
{
$id=session('sess');
$data['result']=viewcart::join('products','products.id','=','viewcarts.product_id')
        ->where('viewcarts.userid', $id)
        ->where('viewcarts.status',"cart")
        ->select('products.productname','products.productimage','products.productprice','viewcarts.id','viewcarts.quantity','viewcarts.total')
        ->get();
        $data['sum']=viewcart::select(viewcart::raw("SUM(total) as psum"))->where('userid',$id)->where('status',"cart")->get();
        return view('user.cart',$data);

      }
      public function buynow()
      {
        $id=session('sess');
        // $cart=['status'=>"order"];
        // viewcart::where('userid',$id)->update($cart);
        // $data['result']=viewcart::where('id',$id)->get();
        $data['result']=viewcart::join('products','products.id','=','viewcarts.product_id')
        ->where('viewcarts.userid', $id)
        ->where('viewcarts.status',"cart")
        ->select('products.productname','products.productimage','products.productprice','viewcarts.id','viewcarts.quantity','viewcarts.total')
        ->get();
        $data['sum']=viewcart::select(viewcart::raw("SUM(total) as psum"))->where('userid',$id)->where('status',"cart")->get();
        return view('user.buynow',$data);
      }

      public function buynowaction(Request $req)
      {
      $userid=session('sess');
      $fname = $req->input('fname');
      $lname = $req->input('lname'); 
      $address1 = $req->input('address1'); 
      $address2 = $req->input('address2'); 
      $city = $req->input('city'); 
      $state = $req->input('state'); 
      $zipcode = $req->input('zipcode');
      $phone = $req->input('phone');
      $email = $req->input('email');
      $method = $req->input('method');
      $total=$req->input('total');
      $data = [

        'userid'=>$userid,
        'fname' => $fname,
        'lname' => $lname,
        'address1' => $address1,
        'address2' => $address2,
        'city' => $city,
        'state' => $state,
        'zipcode' => $zipcode,
        'phone' => $phone,
        'email' => $email,
        'method' => $method,
        'total' => $total
      ];
       
      buynow::insert($data);
      $cart=['status'=>"order"];
      viewcart::where('userid',$userid)->update($cart);
      if($method=="online")
      {
        return redirect('/cardpayment');
      }
      else
     { return redirect('/placeorder');}
    }

    public function placeorder()
    {
      return view('user.placeorder');
    }
    public function cardpayment()
    {
      $userid=session('sess');
      $data['total']=buynow::where('userid',$userid)->where('paymentstatus','notpayed')->where('method','online')->get();
      return view('user.cardpayment',$data);
    }
    public function cardpaymentaction(Request $req)
    {
    
    $userid=session('sess');
    $cardname = $req->input('cardname');
    $cardnumber = $req->input('cardnumber');
    $cvc = $req->input('cvc');
    $exp = $req->input('exp');
    $year = $req->input('year');
    $totalamount = $req->input('totalamount');

    $data = [
      'userid'=>$userid,
      'cardname' => $cardname,
      'cardnumber' => $cardnumber,
      'cvc' => $cvc,
      'exp' => $exp,
      'year' => $year,
      'totalamount' => $totalamount
    ];
     $paymentstatus=['paymentstatus'=>"paymentcompleted"];
      carddetail::insert($data);
      buynow::where('userid',$userid)->where('paymentstatus','notpayed')->update($paymentstatus);
      return redirect('/placeorder');
    }

    
      public function vieworder()
      {
        $id=session('sess');
       $data['result']=buynow::where('userid',$id)->get();
       return view('user.vieworder',$data);
      }
      public function deletecart($id)
      {
        viewcart::where('id',$id)->delete();
        return redirect('/cart');
      }
      public function myprofile()
      {
        $id=session('sess');
        $data['result']=register::where('id',$id)->get();
        return view('user.myprofile',$data);
      }
      public function myprofileaction(Request $req,$id){
        $fullname = $req->input('fullname');
        $email = $req->input('email');
        $contact = $req->input('contact');
        $password = $req->input('password');
        $data = [
          'fullname' => $fullname,
          'email' => $email,
          'contact' => $contact,
          'password' => $password
        ];
        register::where('id',$id)->update($data);
        return redirect('/myprofile');
      }
     

      
}