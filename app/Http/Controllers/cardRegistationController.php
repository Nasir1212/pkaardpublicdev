<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\card_registation;
use App\Mail\invoiceMail;
use Illuminate\Support\Facades\Mail;

class cardRegistationController extends Controller
{
  public function card_registation_add(Request $req){

 
        $cda_address_details= $req->input('cda_address_details');  
        $cda_apartment_no = $req->input('cda_apartment_no'); 
        $cda_district = $req->input('cda_district'); 
        $cda_division = $req->input('cda_division'); 
        $cda_house_no = $req->input('cda_house_no'); 
        $cda_road_no = $req->input('cda_road_no');  
        $cda_upzilla = $req->input('cda_upzilla');  
        $cda_village = $req->input('cda_village');  
        $cda_Thana =$req->input('cda_Thana');
        $date_of_birth = $req->input('date_of_birth');    
        $district = $req->input('district'); 
        $division = $req->input('division'); 
        $email = $req->input('email');  
        $full_name = $req->input('full_name');    
        $gender = $req->input('gender');   
        $nationality = $req->input('nationality');  
        $phone_number = $req->input('phone_number');
        $reference_code = $req->input('reference_code');
        $mediam = $req->input('mediam');
        $profession = $req->input('profession');
        
     
        $card_id ='';
        $invoice_number='';
        $db_all_data =card_registation::all();
        if(count( $db_all_data) > 0){
         $card_id_in_db = card_registation::orderBy('card_id', 'desc')->take(1)->first();
         $card_id  =  $card_id_in_db['card_id']+1;
         $invoice_number= $card_id_in_db['invoice_number']+1;
        }else{
         $card_id =300000001;
         $invoice_number=1500001;

        }
        $result =  card_registation::insert([

            'cda_address_details' =>$cda_address_details,
            'cda_apartment_no' => $cda_apartment_no,
            'cda_district' =>$cda_district,
            'cda_division' =>$cda_division,
            'cda_house_no' =>$cda_house_no,
            'cda_road_no' =>$cda_road_no,
            'cda_upzilla' =>$cda_upzilla,
            'cda_village' =>$cda_village,
            'date_of_birth' =>$date_of_birth,
            'district' =>$district,
            'division' =>$division,
            'email' =>$email,
            'full_name' =>$full_name,
            'gender' =>$gender,
            'nationality' =>$nationality,
            'phone_number' =>$phone_number,
            'reference_code' =>$reference_code,
            'cda_Thana'=>$cda_Thana,
            'card_id'=>$card_id,
            'mediam'=>$mediam,
            'profession'=>$profession,
            'invoice_number'=>$invoice_number,
            'register_date'=> date('Y/m/d') 
            
          
        ]);
            if($result){
              
               return  json_encode(array('message'=>'successfully Registation','condition'=>true,'phone'=>$phone_number));
            }else{
               return json_encode(array('message'=>'failed Registation','condition'=>false));
            }

      //return json_encode($card_id_in_db['card_id']);
  } 

  public function is_phone_exit(Request $req){

   $phone= $req->input('phone');  
   $data = card_registation::where(['phone_number'=>$phone])->get();
   if(count($data) > 0 ){
      return  json_encode(array('is_exit_phone'=>true));

   }else{
      return  json_encode(array('is_exit_phone'=>false));
   }

  }
public function invoice_from_controller($phone){

   $data = card_registation::where(['phone_number'=>$phone])->get();
 
   return view('invoice',['data'=>$data]);
}

public function send_invoice_mail($email){

   $data = card_registation::where(['email'=>$email])->get();
   // return view('invoicemail',['data'=>$data]);

 $is_send_mail =   Mail::to($email)->send(new invoiceMail($data));

 if($is_send_mail){
    return json_encode(array('condition'=>true,'message'=>"invoice sent successfully..."));
 }else{
   return json_encode(array('condition'=>false,'message'=>"invoice sent failed..."));
 }


}

}
