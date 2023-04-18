@extends('master')

@section('content')
<style>

.toast_msg {
    text-align: justify;
    margin-left: 1rem;
}

</style>
<section>

  

    <div class="toast_msg_container d-none" id="toast_con">
        <div class="toast_msg_row ">
            <div class="toast_msg_col">
           
                <div class="toast_msg">
                    <h5 class="chivo_mono" style="font-size: 0.999rem;">We have sent OTP on your mobile no <b id="mobile" class="text-muted"></b> and email <b id="email"  class="text-muted"></b></h5>
                    <h6 class="chivo_mono" style="font-size: 0.99rem;">Please Check your Phone and Mail</h6>
                </div>
               
            </div>
        </div>
    </div>
    <div class="row">

        <form >
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label for="">Enter Otp</label>
            <div class="ref_number_box">
                <input type="text" maxlength="1" class="form-control ref_code_one" name="" id="1">
                <input type="text" maxlength="1" class="form-control ref_code_one" name="" id="2">
                <input type="text" maxlength="1" class="form-control ref_code_one" name="" id="3">
                <input type="text" maxlength="1" class="form-control ref_code_one" name="" id="4">
                <input type="text" maxlength="1" class="form-control ref_code_one" name="" id="5">
                <input type="text" maxlength="1" class="form-control ref_code_one" name="" id="6">
               
            </div>
            <input type="hidden" value="" id="get_otp" name="reference_code" class="form-control">
            <small id="" class="form-text text-muted"> </small>
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class=" col-lg-6 col-md-6 col-sm-6 ">

                    <button type="button" onclick="receive_otp()" class="btn btn-warning  btn-block btn-sm">Submit </button>

                </div>
                <div class=" col-lg-6 col-md-6 col-sm-6 ">
                    <button id="resend_btn" type="button" onclick="send_otp()" class="btn btn-info btn-block btn-sm">Resend OTP </button>

                </div>

            </div>
        </div>


    
    </form>
        </div>
</section>

<script>
    
// window.onload = function (){
//     mobile.innerText = sessionStorage.phone_number;
//     email.innerText = sessionStorage.email 
// }

window.addEventListener("DOMContentLoaded", (event) => {
    
    if(sessionStorage.card_id){
        // send_otp()
        mobile.innerText = sessionStorage.phone_number.replace(/(?<=\d\d\d)\d(?=\d{2})/g, "*");
        email.innerText = sessionStorage.email.replace(/(?<=\w\w\w)\w(?=\w{2})/g, "*") 
    }
       

});

async function receive_otp(){


    let otp_data = {
        otp:get_otp.value
    }

    try {

        const response = await fetch(`/check_card_otp`,{
            method:'POST',
            body:JSON.stringify(otp_data),
            headers: new Headers({
            'Content-Type': 'application/json', 
        })
              
        });
        console.log(response)
        const result = await response.json();
      
        console.log(result)
        if(response.status == 200){
            if(result['condition'] == true){
                // sessionStorage.destory();
                // setLocalStorage(result['condition']) 
                localStorage.card = JSON.stringify(result);
                // location.go(2);
            }else{
                swal("Opps !", `${result['message']}`, "error");
            }
        }

        
    } catch (error) {
        console.log(error)
    }


}
 
async function send_otp(){

   
    let card_info = {
        card_id: sessionStorage.card_id
    }
    resend_btn.disabled = true
    setTimeout(() => {
        resend_btn.disabled = false
    }, 60000 );

    try {
    const response = await fetch(`/send_otp`,{
            method:'POST',
            body:JSON.stringify(card_info),
            headers: new Headers({
            'Content-Type': 'application/json', 
        })
              
        });

        const result = await response.json();
        console.log(result)
        toast_con.classList.remove("d-none")
       
    } catch (error) {
        
    } 

}

let registration_steping =  document.getElementsByClassName("registration_steping");
let ref_code_one =   document.getElementsByClassName('ref_code_one')

 for (const ele  of ref_code_one) {
    
    ele.addEventListener('keyup',function(){
        
       if(this.id != 6 && this.value.length >0){
     
        document.getElementById(Number(this.id)+1).focus();
       }
       let all_ref_code ='';
       for (const ele  of ref_code_one) {
        all_ref_code += ele.value
       }

       document.getElementsByName('reference_code')[0].value= all_ref_code
       
    })
 }





</script>
 @endsection;