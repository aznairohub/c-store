<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\cstorecontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[cstorecontroller::class,'index']);
Route::get('/register',[cstorecontroller::class,'register']);
Route::post('/registeraction',[cstorecontroller::class,'registeraction']);
Route::get('/about',[cstorecontroller::class,'about']);
Route::get('/contact',[cstorecontroller::class,'contact']);
Route::post('/contactaction',[cstorecontroller::class,'contactaction']);
Route::get('/login',[cstorecontroller::class,'login']);
Route::post('/userloginaction',[cstorecontroller::class,'userloginaction']);
Route::get('/logout',[cstorecontroller::class,'logout']);






Route::get('/admin',[admincontroller::class,'admin']); 
Route::post('/adminloginaction',[admincontroller::class,'adminloginaction']); 
Route::get('/adminindex',[admincontroller::class,'index']); 
Route::get('/addabout',[admincontroller::class,'addabout']);
Route::get('/viewusers',[admincontroller::class,'viewusers']);
Route::post('/addaboutaction',[admincontroller::class,'addaboutaction']);
Route::get('/viewaddabout',[admincontroller::class,'viewaddabout']);
Route::get('/addaboutedit/{id}',[admincontroller::class,'addaboutedit']);
Route::post('/addabouteditaction/{id}',[admincontroller::class,'addabouteditaction']);
Route::get('/addaboutdelete/{id}',[admincontroller::class,'addaboutdelete']);
Route::get('/addproduct',[admincontroller::class,'addproduct']);
Route::post('/addproductaction',[admincontroller::class,'addproductaction']);
Route::get('/viewaddproduct',[admincontroller::class,'viewaddproduct']);
Route::get('/addproductedit/{id}',[admincontroller::class,'addproductedit']);
Route::post('/addproducteditaction/{id}',[admincontroller::class,'addproducteditaction']);
Route::get('/addproductdelete/{id}',[admincontroller::class,'addproductdelete']);
Route::get('/addgallery',[admincontroller::class,'addgallery']);
Route::post('/addgalleryaction',[admincontroller::class,'addgalleryaction']);
Route::get('/addviewgallery',[admincontroller::class,'addviewgallery']);
Route::get('/addgalleryedit/{id}',[admincontroller::class,'addgalleryedit']);
Route::post('/addgalleryeditaction/{id}',[admincontroller::class,'addgalleryeditaction']);
Route::get('/addgallerydelete/{id}',[admincontroller::class,'addgallerydelete']);
Route::get('/viewenquery',[admincontroller::class,'viewenquery']);
Route::get('/advieworder',[admincontroller::class,'advieworder']);
Route::get('/viewcardpay',[admincontroller::class,'viewcardpay']);
Route::get('/changestatus/{id}',[admincontroller::class,'changestatus']);
Route::post('/changestatusaction/{id}',[admincontroller::class,'changestatusaction']);





Route::get('/user',[usercontroller::class,'index']); 
Route::get('/product',[usercontroller::class,'product']);
Route::get('/gallery',[usercontroller::class,'gallery']); 
Route::get('/addtocart/{id}',[usercontroller::class,'addtocart']); 
Route::post('/addtocartaction/{id}',[usercontroller::class,'addtocartaction']);
Route::get('/cart',[usercontroller::class,'cart']);
Route::get('/buynow',[usercontroller::class,'buynow']);
Route::post('/buynowaction',[usercontroller::class,'buynowaction']);
Route::get('/placeorder',[usercontroller::class,'placeorder']);
Route::get('/cardpayment',[usercontroller::class,'cardpayment']);
Route::post('/cardpaymentaction',[usercontroller::class,'cardpaymentaction']);
Route::get('/cashondelivery',[usercontroller::class,'cashondelivery']);
Route::get('/vieworder',[usercontroller::class,'vieworder']);
Route::get('/deletecart/{id}',[usercontroller::class,'deletecart']);
Route::get('/myprofile',[usercontroller::class,'myprofile']);
Route::post('/myprofileaction/{id}',[usercontroller::class,'myprofileaction']);












