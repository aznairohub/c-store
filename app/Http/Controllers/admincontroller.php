<?php

namespace App\Http\Controllers;

use App\Models\addabout;
use App\Models\addgallery;
use App\Models\buynow;
use App\Models\contact;
use App\Models\product;
use App\Models\register;
use App\Models\viewcart;
use App\Models\carddetail;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class admincontroller extends Controller
{
  public function admin()
  {
    return view('admin.login');
  }
  public function adminloginaction(Request $req)
  {
    $username = $req->input('username');
    $password = $req->input('password');
    $data = admin::where('username', $username)->where('password', $password)->first();
    if (isset($data)) {
      return redirect('/adminindex');
    } else {
      return redirect('/admin')->with('error', 'invalid  username or Password');
    }
  }
  public function index()
  {
    $data['orders'] = viewcart::where('status', 'order')->count();
    $data['users'] = register::count();
    $data['payments'] = buynow::count();
    $data['product'] = product::count();
    return view('admin.index', $data);
  }
  public function viewusers()
  {
    $data['result'] = register::get();
    return view('admin.viewusers', $data);
  }
  public function addabout()
  {
    return view('admin.addabout');
  }
  public function addaboutaction(Request $req)
  {
    $title = $req->input('title');
    $description = $req->input('description');
    $data = [
      'title' => $title,
      'description' => $description
    ];
    addabout::insert($data);
    return redirect('/viewaddabout');
  }
  public function viewaddabout()
  {
    $data['result'] = addabout::get();
    return view('admin.viewaddabout', $data);
  }
  public function addaboutedit($id)
  {
    $data['result'] = addabout::where('id', $id)->get();
    return view('admin.addaboutedit', $data);
  }
  public function addabouteditaction(Request $req, $id)
  {
    $title = $req->input('title');
    $description = $req->input('description');
    $data = [
      'title' => $title,
      'description' => $description
    ];
    addabout::where('id', $id)->update($data);
    return redirect('viewaddabout');
  }
  public function  addaboutdelete($id)
  {
    addabout::where('id', $id)->delete();
    return redirect('viewaddabout');
  }
  public function addproduct()
  {
    return view('admin.addproduct');
  }
  public function addproductaction(Request $req)
  {
    $productname = $req->input('productname');
    $productimage = $req->file('productimage');
    $filename = $productimage->getClientOriginalName();
    $productimage->move(public_path() . '/uploads/', $filename);
    $producttype = $req->input('producttype');
    $productprice = $req->input('productprice');
    $productexpdate = $req->input('productexpdate');
    $description = $req->input('description');
    $data = [
      'productname' => $productname,
      'productimage' => $filename,
      'producttype' => $producttype,
      'productprice' => $productprice,
      'productexpdate' => $productexpdate,
      'description' => $description
    ];
    product::insert($data);
    return redirect('/viewaddproduct');
  }

  public function viewaddproduct()
  {
    $data['result'] = product::get();
    return view('admin.viewaddproduct', $data);
  }
  public function addproductedit($id)
  {
    $data['result'] = product::where('id', $id)->get();
    return view('admin.addproductedit', $data);
  }
  public function addproducteditaction(Request $req, $id)
  {
    $productname = $req->input('productname');
    $productimage = $req->file('productimage');
    $producttype = $req->input('producttype');
    $productprice = $req->input('productprice');
    $productexpdate = $req->input('productexpdate');
    $description = $req->input('description');
    if ($productimage == "") {
      $data = [
        'productname' => $productname,
        'producttype' => $producttype,
        'productprice' => $productprice,
        'productexpdate' => $productexpdate,
        'description' => $description
      ];
    } else {
      $filename = $productimage->getClientOriginalName();
      $productimage->move(public_path() . '/uploads/', $filename);
      $data = [
        'productname' => $productname,
        'productimage' => $filename,
        'producttype' => $producttype,
        'productprice' => $productprice,
        'productexpdate' => $productexpdate,
        'description' => $description
      ];
    }
    product::where('id', $id)->update($data);
    return redirect('viewaddproduct');
  }
  public function  addproductdelete($id)
  {
    product::where('id', $id)->delete();
    return redirect('viewaddproduct');
  }
  public function addgallery()
  {
    return view('admin.addgallery');
  }
  public function addgalleryaction(Request $req)
  {
    $name = $req->input('name');
    $image = $req->file('image');
    $filename = $image->getClientOriginalName();
    $image->move(public_path() . '/uploads/', $filename);
    $data = [
      'name' => $name,
      'image' => $filename
    ];
    addgallery::insert($data);
    return redirect('/addviewgallery');
  }
  public function addviewgallery()
  {
    $data['result'] = addgallery::get();
    return view('admin.addviewgallery', $data);
  }
  public function addgalleryedit($id)
  {
    $data['result'] = addgallery::where('id', $id)->get();
    return view('admin.addgalleryedit', $data);
  }
  public function addgalleryeditaction(Request $req, $id)
  {
    $name = $req->input('name');
    $image = $req->file('image');
    if ($image == "") {
      $data = [
        'name' => $name
      ];
    } else {
      $filename = $image->getClientOriginalName();
      $image->move(public_path() . '/uploads/', $filename);
      $data = [
        'name' => $name,
        'image' => $filename
      ];
    }
    addgallery::where('id', $id)->update($data);
    return redirect('addviewgallery');
  }
  public function  addgallerydelete($id)
  {
    addgallery::where('id', $id)->delete();
    return redirect('addviewgallery');
  }
  public function viewenquery()
  {
    $data['result'] = contact::get();
    return view('admin.viewenquery', $data);
  }

  public function advieworder()
  {

    $data['result'] = buynow::get();
    return view('admin.advieworder', $data);
  }
  public function viewcardpay()
  {
    $data['result'] = carddetail::get();
    return view('admin.viewcardpay', $data);
  }
  public function changestatus(Request $req, $id)
  {
    $data['result'] = buynow::where('id', $id)->get();
    return view('admin.changestatus', $data);
  }
  public function changestatusaction(Request $req, $id)
  {
    $status = $req->input('status');
    $data = [
      'paymentstatus' => $status
    ];
    buynow::where('id', $id)->update($data);
    return redirect('/advieworder');
  }
}
