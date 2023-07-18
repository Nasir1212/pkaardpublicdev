<?php

use Illuminate\Support\Facades\Route;
use App\Mail\invoiceMail;
use App\Mail\Otp_mail;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/index','App\Http\Controllers\HomeController@index');


Route::get('/', function () {
    return view('home_view');
});


Route::get('/registation_page', function () {
    return view('registation_page');
});


Route::get('/otp_view', function () {
    return view('otp_view');
});


Route::get('/about_us', function () {
    return view('about_us');
});




Route::get('/pkaard_registration', function () {
    return view('pkaard_registration');
});

Route::get('/invoice/{phone}','App\Http\Controllers\cardRegistationController@invoice_from_controller');

// Route::get('/invoice/{phone}',function($phone){
//     return view('invoice',['phone'=>$phone]);
// });




Route::post('/is_phone_exit','App\Http\Controllers\cardRegistationController@is_phone_exit');

Route::post('/card_registation_add','App\Http\Controllers\cardRegistationController@card_registation_add');
Route::get('/send_invoice_mail/{email}','App\Http\Controllers\cardRegistationController@send_invoice_mail');

// function (){
//     Mail::to('nnasiruddin1996@gmail.com')->send(new invoiceMail());

// });



Route::get('otp/{phone}/{mail}/{otp}',function ($phone,$mail,$otp){

    $send_msg_sms = file_get_contents("https://msg.elitbuzz-bd.com/smsapi?api_key=C200850563a0117d34a273.64286297&type=text&contacts=$phone&senderid=8809601000144&msg=Dear Customer, $otp is your SECRET OTP (One Time Password) to authenticate your login to Pkaard. Do not share it with anyone. For Contact : 096-77-888-222");
   if($send_msg_sms ){
    // echo $send_msg_sms;
    // return json_encode(array('condition'=>true,'message'=>"Mobile OTP  sent successfully..."));

    $is_send_mail =  Mail::to($mail)->send(new Otp_mail($otp));

    if($is_send_mail){
        return json_encode(array('condition'=>true,'message'=>"Mail OTP  sent successfully..."));
     }else{
       return json_encode(array('condition'=>false,'message'=>"Mail OTP  sent failed..."));
     } 
    }else{
        return json_encode(array('condition'=>false,'message'=>"phone OTP  sent failed...")); 
     }
    


});


Route::get('/product_details_view/{product_id}','App\Http\Controllers\HomeController@product_details_view');

Route::get('/product_view','App\Http\Controllers\HomeController@product_view');
Route::get('/card_login_otp_view','App\Http\Controllers\HomeController@card_login_otp_view');
Route::get('/purchase_details/{id}','App\Http\Controllers\HomeController@purchase_details');
Route::get('/all_category','App\Http\Controllers\HomeController@all_category');

Route::post('/get_product_by_d_and_c','App\Http\Controllers\HomeController@get_product_by_d_and_c');
Route::get('/card_login_view',function(){
    return view("card_login_view");
});
Route::post('/check_card_number','App\Http\Controllers\HomeController@check_card_number');
Route::post('/send_otp','App\Http\Controllers\HomeController@send_otp');
Route::post('/check_card_otp','App\Http\Controllers\HomeController@check_card_otp');


Route::get('/reviews_reating_push_view',function(){
 return  view("reviews_reating_push_view");
});


Route::get('/sub_reviews_reating_push_view',function(){
    return  view("sub_reviews_reating_push_view");
   });
   

Route::post('/insert_reviews_reating','App\Http\Controllers\HomeController@insert_reviews_reating');
   
Route::get('/customer_profile',function(){
    return view("customer_profile");
});

Route::get('/gallery_view',function(){
    return view("gallery_view");
});



Route::post('/insert_sub_reviews_reating','App\Http\Controllers\HomeController@insert_sub_reviews_reating');

Route::get('/sub_product_view/{id}','App\Http\Controllers\HomeController@sub_product_view');
Route::get('/sub_product_details_view/{id}','App\Http\Controllers\HomeController@sub_product_details_view');













