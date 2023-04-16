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
   
     

       if(patt.test(card_no.value)){

        try {
          
        // sessionStorage.card_id = Number(card_no.value);

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
        console.log(result)

        } catch (error) {
            console.log(error)
            
        }

     
       }


    }
</script>

 @endsection;