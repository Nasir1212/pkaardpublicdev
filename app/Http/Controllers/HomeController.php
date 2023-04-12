<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IP;
use App\Models\Affiliation_product;
use App\Models\Category;

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

    $results = \DB::select("SELECT affiliation_product.* , category.category_name,districts.name AS district_name  FROM affiliation_product LEFT JOIN category ON category.id =affiliation_product.category_id LEFT JOIN districts ON districts.id = affiliation_product.district_id  WHERE affiliation_product.id = $product_id");

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

}

