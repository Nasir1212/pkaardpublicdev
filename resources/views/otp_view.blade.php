@extends('master')

@section('content')

<div class="registration_container">
    <div class="registration_steping">
        <h5 class='text-muted'>Check your phone </h5>
   
    <div class="form-group col-lg-6 col-md-6 col-sm-12" >
    <label for="">Enter OTP </label>
    <div class="ref_number_box">
        <input type="text" maxlength="1"  class="form-control otp_code " id="1"  >
        <input type="text" maxlength="1"  class="form-control otp_code " id="2"  >
        <input type="text" maxlength="1"  class="form-control otp_code " id="3"  >
        <input type="text" maxlength="1"  class="form-control otp_code " id="4"  >
        <input type="text" maxlength="1"  class="form-control otp_code " id="5"  >
        <input type="text" maxlength="1"  class="form-control otp_code " id="6"  >
       
    </div>
    <input type="hidden" value="" name="otp_code" class="form-control" id="">
    <small id="" class="form-text text-muted"> </small>
</div>
<div class="form-group col-12 d-flex justify-content-between">
     
        <button type="button"  disabled id="resend_btn" onclick="send_otp_number()" class="btn btn-warning btn-outline-danger  text-white font-weight-bold ">Resend OTP</button>
        <button type="button"   id="" onclick="submit_otp()" class="btn btn-outline-danger   font-weight-bold ">Submit </button>

        </div>
</div>
  </div>
   

   <script>




var  all_data = '';
var generating_otp = '';



  all_data=  JSON.parse(sessionStorage.getItem("user_form_data"));
 


  send_otp_number();

function submit_otp(){
    
   

   let otp =  document.getElementsByName('otp_code')[0].value;

    if( otp.length ==6 && otp == generating_otp ){
          console.log(all_data)

          send_data_in_server(all_data);

      }else{
     

swal("Opps !", "OTP not correct", "error");
      }
}

function generateOTP() { 
          
// Declare a digits variable  
// which stores all digits 
var digits = '0123456789'; 
let OTP = ''; 
for (let i = 0; i < 6; i++ ) { 
OTP += digits[Math.floor(Math.random() * 10)]; 
}
return OTP; 
      } 
    

      function send_otp_number(){
        generating_otp =  generateOTP();
    

    fetch(`otp/${all_data['phone_number']}/${all_data['email']}/${generating_otp}`)
       .then(response => response.json())
       .then(data => {
       
        console.log(data)
        if(data['condition']==true){
            $.toast({
    heading: 'successfully ',
    text: 'OTP have sent in your phone and mail',
    icon: 'info',
    loader: true,        // Change it to false to disable loader
    loaderBg: '#9EC600'  // To change the background
}) 
        }
          
       })
       document.getElementById("resend_btn").disabled = true;
       setTimeout(() => {
        console.log('Hellow Woorld')
        document.getElementById("resend_btn").disabled = false;
       }, 60000);


      }

     function  send_data_in_server(server_data){


fetch(`card_registation_add`, {
    method: 'POST',
    body:JSON.stringify(server_data),
    headers: new Headers({
                'Content-Type': 'application/json',
              
            })
  })
  .then(response => response.json())
  .then(data => {
    console.log(data)
    fetch(`send_invoice_mail/${all_data['email']}` )
    .then(response => response.json())
    .then(d => {
       

        if(data['condition']==true){
        swal("successfully", "you have Registerd for card", "success");
        sessionStorage.setItem("user_form_data",'');
        setTimeout(() => { 
        location.href = `${location.origin}/invoice/${data['phone']}`;
       }, 2000);

      
    }else{
        swal("Opps !", "something went wrongpp", "error");
    }
    });
    
   
  })



     }

    
    


   

  


let otp_code =   document.getElementsByClassName('otp_code')

for (const ele  of otp_code) {
   
   ele.addEventListener('keyup',function(){
       
      if(this.id != 6 && this.value.length >0){
    
       document.getElementById(Number(this.id)+1).focus();
      }
      let all_otp_code ='';
      for (const ele  of otp_code) {
        all_otp_code += ele.value
      }

      document.getElementsByName('otp_code')[0].value= all_otp_code

            

   })
}

   </script>

@endsection