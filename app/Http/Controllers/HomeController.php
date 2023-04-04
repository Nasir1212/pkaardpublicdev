<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IP;

class HomeController extends Controller
{
    public function index(){
//         $visitorip = $_SERVER["REMOTE_ADDR"];
// if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
//     $visitorip .= '('.$_SERVER["HTTP_X_FORWARDED_FOR"].')';
// }
// if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
//     $visitorip .= '('.$_SERVER["HTTP_CLIENT_IP"].')';
// }
// return $visitorip;

// return 'User IP Address - '.$_SERVER['REMOTE_ADDR'];  

function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

//return $user_ip; // Output IP address [Ex: 177.87.193.134]

$data = IP::where(['ip'=>$user_ip])->get();
   if(count($data) > 0 ){
       $date = date('Y/m/d');
    IP::where(['ip'=>$user_ip])->update(['date'=>$date]);
   }else{
    $result =  IP::insert([

        'date'=>date('Y/m/d'),
        'ip'=>$user_ip
      
      
      ]);
   }

return true;
}



public function  product_details_view(){
    return view('product_details_view');
}

public function  product_view(){

    return view("product_view");
}

public function card_login_otp_view(){
    return view("card_login_otp_view");
}

public function purchase_details(){
    return view("purchase_details");
}
}

