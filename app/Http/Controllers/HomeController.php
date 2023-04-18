<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IP;
use App\Models\Affiliation_product;
use App\Models\Category;
use App\Models\card_registation;
use App\Mail\Otp_mail;
use Illuminate\Support\Facades\Mail;
use App\Models\OTP;
use App\Models\Rating_and_comment;

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



public function  product_details_view( $product_id ){

    $results = \DB::select("SELECT affiliation_product.* , category.category_name,districts.name AS district_name  FROM affiliation_product LEFT JOIN category ON category.id =affiliation_product.category_id LEFT JOIN districts ON districts.id = affiliation_product.district_id  WHERE affiliation_product.id = '$product_id'");

    return view('product_details_view',['product_data'=>$results]);
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

public static function all_category(){
 return Category::all();
}

public function get_product_by_d_and_c(Request $req ){
   
    $category_id= $req->input('category_id');  
    $district_id= $req->input('district_id');  
    $page= $req->input('page');  


//  return   Affiliation_product::inRandomOrder()
//  ->where(['category_id' =>$category_id ])
//  ->where(['district_id' =>$district_id ])
//  ->paginate(30)
//  ->onEachSide(1);

$ip=$_SERVER['REMOTE_ADDR'];
$hour=date("H");
$day=date("j");
$month=date("n");
$ip=str_replace(".","",$ip);
$seed=($ip+$hour+$day+$month);

$amount = 3;
$offset = 0;
if($category_id != 0 &&  $district_id != 0 ):

  $total_data =   Affiliation_product::where(['category_id' =>$category_id ])->where(['district_id' =>$district_id ])->count();
   $results = \DB::select("SELECT affiliation_product.* , category.category_name,districts.name AS district_name FROM affiliation_product LEFT JOIN category ON category.id =affiliation_product.category_id LEFT JOIN districts ON districts.id = affiliation_product.district_id  WHERE district_id = $district_id AND category_id = $category_id  ORDER BY RAND($seed)");
 return  json_encode(array("total_data"=>$total_data,"all_data"=>$results ));
//  LIMIT $amount OFFSET $offset

else:
    $total_data =   Affiliation_product::where(['category_id' =>$category_id ])->orWhere(['district_id' =>$district_id ])->count();

    $results = \DB::select("SELECT affiliation_product.* , category.category_name,districts.name AS district_name  FROM affiliation_product LEFT JOIN category ON category.id =affiliation_product.category_id LEFT JOIN districts ON districts.id = affiliation_product.district_id  WHERE district_id = $district_id OR category_id = $category_id  ORDER BY RAND($seed)");

    return  json_encode(array("total_data"=>$total_data,"all_data"=>$results ));

endif;



}


public function check_card_number(Request $req){

    $card_id= $req->input("card_id");
    $valid_card_no =  ltrim($card_id,1509002);
   $result  =   card_registation::where(['card_id'=>$valid_card_no])->count();
   $data =   card_registation::where(['card_id'=>$valid_card_no])->get();
  return json_encode(['card_status'=>$result,"valid_card"=>$data[0]['card_id'],'phone_number'=>$data[0]['phone_number'],'email'=>$data[0]['email']]);

}

public  function send_otp(Request $req){
    $card_id= $req->input("card_id");
   $data = card_registation::where(['card_id'=>$card_id])->get();

   $otp = rand(100000,999999);
   $mail = $data[0]['email'];
   $phone = $data[0]['phone_number'];

   $send_msg_sms = file_get_contents("https://msg.elitbuzz-bd.com/smsapi?api_key=C200850563a0117d34a273.64286297&type=text&contacts=$phone&senderid=8809601000144&msg=Dear Customer,  $otp  is your SECRET OTP (One Time Password) to authenticate your login to Pkaard. Do not share it with anyone. For Contact : 096-77-888-222");
   if($send_msg_sms ){
    $is_send_mail =  Mail::to($mail)->send(new Otp_mail($otp));

    $sending_otp =  OTP::insert([
        'otp'=>$otp,
        'is_expired'=>0,
        'create_at'=>date("Y-m-d H:i:s"),
        'card_id'=>$data[0]['card_id']
      
      ]);


    if($is_send_mail){
        return json_encode(array('condition'=>true,'message'=>"Mail OTP  sent successfully..."));
     }else{
       return json_encode(array('condition'=>false,'message'=>"Mail OTP  sent failed..."));
     } 
    }else{
        return json_encode(array('condition'=>false,'message'=>"phone OTP  sent failed...")); 
     }
    


}

public function check_card_otp(Request $req){
    $otp= $req->input("otp");
    if(OTP::where(['otp'=>$otp])->count() >0){
       $data =  OTP::where(['otp'=>$otp])->get();

       OTP::where(['otp'=>$otp])->delete();
       return json_encode(['condition'=>true,'is_login' => true,'card_id'=>$data[0]['card_id']]);
    }else{
        return json_encode(array('condition'=>false,'message'=>"OTP not matched "));
    }

}

public static function suggested_product($category_id){

    return   Affiliation_product::inRandomOrder()
 ->where(['category_id' =>$category_id])
 ->limit(4)
 ->get();

}

public static function get_product_coment_and_rating($product_id){

//   return Rating_and_comment::where(['product_id'=>$product_id])->get();

 return \DB::select("SELECT rating_and_comment.* ,card_registation.full_name AS user_name FROM rating_and_comment LEFT JOIN card_registation ON rating_and_comment.card_id = card_registation.card_id WHERE rating_and_comment.product_id = '$product_id'");

}

}

