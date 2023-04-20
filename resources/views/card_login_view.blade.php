@extends('master')

@section('content')



<section style="">
    <div class="card_number_container">
       
        <div class="card_number_form">
            <form >
                <div>
                    <input id="card_no" type="text" style="margin-bottom: 0.5rem;" class="form-control" name="" id="" placeholder="Enter Card Number">
                    <button type="button" onclick="get_card_no()" href="/card_login_otp_view" class="btn btn-info btn-block btn-sm">Submit</button>
                </div>
            </form>
        </div>

        
    </div>
</section>


<script>
    // console.log(history.go())
  async  function get_card_no(){
let patt = /^[0-9]+$/g
let patt2 = /^1509002/g;
   
     

       if(patt.test(card_no.value) && patt2.test(card_no.value)){

        try {
          
        let card_info = {
            card_id:card_no.value
        }
            const response = await fetch(`/check_card_number`,{
            method:'POST',
            body:JSON.stringify(card_info),
            headers: new Headers({
            'Content-Type': 'application/json', 
        })
              
        });
       
        const result = await response.json();
        
        if(response.status=200){
        if(result['card_status'] ==1){
            sessionStorage.card_id = result['valid_card'];
            sessionStorage.email = result['email'];
            sessionStorage.phone_number = result['phone_number']
            // send_otp()
            location.href = `${location.origin}/card_login_otp_view`;
            
        }else{
         swal("Opps !", "Please insert valid card number!", "error");

        }
    }
        } catch (error) {
            console.log(error)
            swal("Opps !", "Something went wrong", "error"); 
        }
     
       }else{
        swal("Opps !", "Please insert valid card number!", "error");
       }


    }

   
</script>

 @endsection;