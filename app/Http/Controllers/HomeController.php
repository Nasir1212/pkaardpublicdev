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
use App\Models\sub_Rating_and_comment;
use App\Models\Physical_card_no;
use App\Models\aff_sub_discount_product;
use App\Models\Order_card_holder;
use App\Models\Card_holder_wallet;



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

    $results = \DB::select("SELECT affiliation_product.*, category.category_name,districts.name AS district_name   FROM affiliation_product  LEFT JOIN category ON category.id =affiliation_product.category_id LEFT JOIN districts ON districts.id = affiliation_product.district_id WHERE affiliation_product.id = '$product_id' ");

    $all_rating = \DB::select("SELECT rating  FROM rating_and_comment  WHERE product_id = '$product_id'");

    return view('product_details_view',['product_data'=>$results,'all_rating'=>$all_rating]);
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


public function check_card_number(Request $req){//This card_number is as a Registation number

    $card_id= $req->input("card_id");
    // $valid_card_no =  ltrim($card_id,1509002);
    $count = Physical_card_no::where(['card_no'=>$card_id])->count();
    if($count >0){
    $data = Physical_card_no::where(['card_no'=>$card_id])->get();
    // $data =   card_registation::where(['card_id'=>$valid_card_no])->get();
    $mail =  card_registation::where(['phone_number'=>$data[0]['phone_no']])->get(['email']);
    return json_encode(['condition'=>true,"card_no"=>$data[0]['card_no'],'email'=>$mail[0]['email'],'phone_no'=>$data[0]['phone_no']]);
    }else{
    return json_encode(["condition"=>false,"message"=>"Your Card is not active "]);
    }
  

}

public  function send_otp(Request $req){
    $phone_number= $req->input("phone_number");
   $data = card_registation::where(['phone_number'=>$phone_number])->get();

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


public function insert_reviews_reating(Request $req){
    $rating= $req->input("rating");
    $card_id= $req->input("card_id");
    $product_id= $req->input("product_id");
    $comment= $req->input("comment");

    $result = Rating_and_comment::insert([
        'card_id'=>$card_id,
        'product_id'=>$product_id,
        'comment'=>$comment,
        'rating'=>$rating,
        'date'=>date('Y/m/d')
    ]);

    if($result){
        return json_encode(['condition'=>true,'message'=>"Successfully inserted"]);
    }else{
        return json_decode(['condition'=>false,"message"=>"Inseted failed"]);
    }


}


public function insert_sub_reviews_reating(Request $req){
    $rating= $req->input("rating");
    $card_id= $req->input("card_id");
    $sub_product_id	= $req->input("sub_product_id");
    $comment= $req->input("comment");

    $result = sub_Rating_and_comment::insert([
        'card_id'=>$card_id,
        'sub_product_id'=>$sub_product_id	,
        'comment'=>$comment,
        'rating'=>$rating,
        'date'=>date('Y/m/d')
    ]);

    if($result){
        return json_encode(['condition'=>true,'message'=>"Successfully inserted"]);
    }else{
        return json_decode(['condition'=>false,"message"=>"Inseted failed"]);
    }


}



public function sub_product_view($id){

$results = \DB::select("SELECT aff_sub_discount_product.* , affiliation_product.address AS affiliation_product_address , affiliation_product.title  AS store_name FROM  aff_sub_discount_product LEFT JOIN affiliation_product ON affiliation_product.id = aff_sub_discount_product.affiliation_product_id WHERE affiliation_product.id=$id");
return view('sub_product_view',['data'=>$results]);
}


public function sub_product_details_view($id){
$results = \DB::select("SELECT aff_sub_discount_product.* , districts.name AS district_name , category.category_name,  category.id AS category_id, affiliation_product.address , affiliation_product.title  AS store_name FROM  aff_sub_discount_product LEFT JOIN affiliation_product ON affiliation_product.id = aff_sub_discount_product.affiliation_product_id LEFT JOIN districts ON districts.id = affiliation_product.district_id LEFT JOIN  category ON  category.id = affiliation_product.category_id  WHERE aff_sub_discount_product.id=$id");

$all_rating = \DB::select("SELECT rating  FROM sub_rating_comment  WHERE sub_product_id = '$id'");

return view("sub_product_details_view",['product_data'=>$results,'all_rating'=>$all_rating]);

}

public static function product_info_one($id){

    return Affiliation_product::where(['id'=>$id])->get();

}

public static function sub_product_info_one($id){
    return aff_sub_discount_product::where(['id'=>$id])->get();
}

public static function get_product_sub_coment_and_rating($id){

    //   return Rating_and_comment::where(['product_id'=>$product_id])->get();
    
     return \DB::select("SELECT sub_rating_comment.* ,card_registation.full_name AS user_name FROM sub_rating_comment LEFT JOIN card_registation ON sub_rating_comment.sub_product_id = card_registation.card_id WHERE sub_rating_comment.sub_product_id = '$id'");
    
    }
    public function check_Registation_number(Request $req){//This card_number is as a Registation number

        $card_id= $req->input("card_id");
        $valid_card_no =  ltrim($card_id,1509002);
       $result  =   card_registation::where(['card_id'=>$valid_card_no])->count();
      
      return json_encode(['card_status'=>$result]);
    
    }

    public function add_physical_card_no(Request $req){
        

        $valid_registation_no =  ltrim($req->input("registation_no"),1509002);
        $count  =   card_registation::where(['card_id'=>$valid_registation_no,'phone_number'=>$req->input("phone_no")])->count();

        if($count >0){
          $result = Physical_card_no::insert([
                'card_no'=>$req->input("card_no"),
                'phone_no'=>$req->input("phone_no"),
                'registation_no'=>$valid_registation_no,
                'date'=>date('Y/m/d')
            ]);
            if($result){
                return json_encode(['condition'=>true,'message'=>"Your Card successfully activated "]);
            }else{
                return json_encode(['condition'=>false,"message"=>"Inseted failed"]);
            }
        }else{
            return json_encode(['condition'=>false,"message"=>"Phone number and card number not matched"]);

        }

       

    }

    public function confirm_with_promo_code(Request $req){

        
        $explode_param = explode('-',$req->input("product_table_id"));

        if($explode_param[0]=='p_id'){
            $affiliation_id =  Affiliation_product::where(['id'=>$explode_param[1]])->get(['company_id']);            
        }else{
            $id = aff_sub_discount_product::where(['id'=>$explode_param[1]])->get(['affiliation_product_id']);   
            $affiliation_id= Affiliation_product::where(['id'=>$id[0]['affiliation_product_id']])->get(['company_id']);
        }
      $wallet =   Card_holder_wallet::where(['registation_no'=>$req->input("registation_no")])->get(['wallet']);
      
      if($wallet[0]['wallet'] >= 3){

        Card_holder_wallet::where(['registation_no'=>$req->input("registation_no")])->update([

            'wallet'=>$wallet[0]['wallet']-3
        ]);
      $result =  Order_card_holder::insert([
            'card_holder'=>$req->input("registation_no"),
            'product_table_id'=>$req->input('product_table_id'),
            'affiliation_id'=>$affiliation_id[0]->company_id,
            'discount_promo_code'=>$req->input('discount_promo_code'),
            'date'=>date('Y/m/d')
        ]);
        if($result){
            return json_encode(['condition'=>true,'message'=>"successfully confirm"]);
        }else{
            return json_encode(['condition'=>false,"message"=>"confirm failed"]);
        }
    }else{
        return json_encode(['condition'=>false,"message"=>"Your blance is insufficient"]);
    }

    }



    public function confirm_without_promo_code (Request $req){

   
        $explode_param = explode('-',$req->input("product_table_id"));

        if($explode_param[0]=='p_id'){
            $affiliation_id =  Affiliation_product::where(['id'=>$explode_param[1]])->get(['company_id']);            
        }else{
            $id = aff_sub_discount_product::where(['id'=>$explode_param[1]])->get(['affiliation_product_id']);   
            $affiliation_id= Affiliation_product::where(['id'=>$id[0]['affiliation_product_id']])->get(['company_id']);
        }
      $wallet =   Card_holder_wallet::where(['registation_no'=>$req->input("registation_no")])->get(['wallet']);
      
      if($wallet[0]['wallet'] >= $req->input("grand_total") ){
      
        Card_holder_wallet::where(['registation_no'=>$req->input("registation_no")])->update([

            'wallet'=>$wallet[0]['wallet'] - $req->input("grand_total")
        ]);
      $result =  Order_card_holder::insert([
            'card_holder'=>$req->input("registation_no"),
            'product_table_id'=>$req->input('product_table_id'),
            'affiliation_id'=>$affiliation_id[0]->company_id,
            'discount_promo_code'=>$req->input('discount_promo_code'),
            'payable_price'=>$req->input('payable_price'),
            'date'=>date('Y/m/d')
        ]);
        if($result){
            return json_encode(['condition'=>true,'message'=>"successfully confirm"]);
        }else{
            return json_encode(['condition'=>false,"message"=>"confirm failed"]);
        }
    }else{
        return json_encode(['condition'=>false,"message"=>"Your blance is insufficient"]);
    }



        
    }



}

