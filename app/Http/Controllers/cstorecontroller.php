<?php

namespace App\Http\Controllers;
use App\Models\addabout;
use App\Models\product;
use App\Models\register;
use App\Models\contact;

use Illuminate\Http\Request;

class cstorecontroller extends Controller
{
  public function index()
  {
    $data['result'] = product::get();
    return view('index',$data);
    
  }
    public function register()
    {
      return view('register');
    }
    public function registeraction(Request $req)
  {
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
    register::insert($data);
    return view('register');
    }
    public function about()
  {
    $data['result'] = addabout::get();
    return view('about',$data);
    
  }
  public function contact()
    {
      return view('contact');
    }
    public function contactaction(Request $req)
  {
    $fullname = $req->input('fullname');
    $email = $req->input('email');
    $contact = $req->input('contact');
    $message = $req->input('message');
    $data = [
      'fullname' => $fullname,
      'email' => $email,
      'contact' => $contact,
      'message' => $message
    ];
    contact::insert($data);
    return view('contact');
    }

    public function login()
  {
    return view('login');
  }
  public function userloginaction(Request $req)
  {
    $email = $req->input('email');
    $password = $req->input('password');
    $data = register::where('email', $email)->where('password', $password)->first();
    if (isset($data)) {
      $req->session()->put(array('sess' => $data->id));
      return redirect('/user');
    } else {
      return redirect('login')->with('error', 'invalid Email id or Password');
    }
  }
  public function logout(Request $req)
{
     $req->session()->forget('sess');
     return redirect('/');
}
}
