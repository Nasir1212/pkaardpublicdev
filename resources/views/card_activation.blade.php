@extends('master')

@section('content')
<style>

.toast_msg {
    text-align: justify;
    margin-left: 1rem;
}


caption {
 
    text-align: center !important;
    caption-side: top !important;
    font-size: 2rem !important;
    font-family: fantasy !important;
}

.card_activation_form {
    width: 30rem;
    margin: auto;
    border: 0.1px solid #8080808c;
}

.table td, .table th {
    padding: .75rem;
    vertical-align: unset !important;
    border-top: 1px solid #dee2e6;
}

.card_activation_form label {
    display: inline-block;
    margin-bottom: .5rem;
    font-weight: bold;
    color: gray;
    font-family: initial;
}

.border_green{
    border:2px solid green;
}
</style>

<section>

    <div class="row">
        <form class="card_activation_form mb-2">   
        <table class="table ">
            <caption>Card Activation </caption>
            <tr>
                <td><label for=""> Mobile No </label> </td>
                <td>
                    <input onkeyup="handle_change(this);" pattern="[0-9]" name = "phone_no"  class="form-control"  type="text">
                    <p class="form-text text-danger"></p>
                </td>
            </tr>
            <tr>
                <td><label for=""> Registation  No </label> </td>
                <td>
                    <input onkeyup="handle_change(this);" name="registation_no"  class="form-control" type="text">
                    <p class="form-text text-danger"></p>
                </td>
            </tr>
            <tr>
                <td><label for=""> Card No </label> </td>
                <td>
                    <input onkeyup="handle_change(this);" name="card_no"  class="form-control" type="text">
                    <p class="form-text text-danger"></p>
                </td>
            </tr>
            <tr>
               <td></td>
                <td><button type="button"  id="check_activation" class="btn btn-sm btn-success font-weight-bold btn-block">Activation</button></td>
            </tr>
        </table>
  
    </form>
    </div>
</section>

    <script>
        let FormData = {}
        function handle_change(e){
            let {name,value} = e;
           
           console.log(name+" "+value)
            if(name == 'phone_no'){
                e.nextElementSibling.innerText ='';
             
               try {              
                fetch('is_phone_exit', {
                method: 'POST',
                body:JSON.stringify({['phone']:value}),
                headers: new Headers({
                        'Content-Type': 'application/json',  
                    })})
                .then(response => response.json())
                .then(data => {
                    e.nextElementSibling.innerText ='';
                    if(data['is_exit_phone'] == true){
                        FormData[name] = value;
                        handle_submit();
                    }else{
                        e.nextElementSibling.innerText ='Phone number not Registered';
                        FormData[name] = null;
                    }
                })
               } catch (error) {
                alert("something went wrong")
                console.error(error);
               }
            }
             
           
            if(name == 'registation_no' &&  /^[0-9]{16}$/.test(e.value) == true){
                e.nextElementSibling.innerText ='';
                try {              
                fetch('check_Registation_number', {
                method: 'POST',
                body:JSON.stringify({['card_id']:value}),
                headers: new Headers({
                        'Content-Type': 'application/json',  
                    })})
                .then(response => response.json())
                .then(data => {
                    if(data['card_status'] == 1){
                        FormData[name] = value;
                        handle_submit();
                    }else{
                        e.nextElementSibling.innerText ='Card number not valid';
                        FormData[name] = null;
                    }
                })
               } catch (error) {
                alert("something went wrong")
                console.error(error);
               }
            }else if (name == 'registation_no' &&  /^[0-9]{16}$/.test(e.value) == false ){
                e.nextElementSibling.innerText = "Enter Only 16 Digit";
                FormData[name] = null;
            }

            if(name == 'card_no' &&  /^[0-9]{16}$/.test(e.value) == true){
                e.nextElementSibling.innerText ='';
                FormData[name] = value;
            }else if (name == 'card_no' &&  /^[0-9]{16}$/.test(e.value) == false ){
                e.nextElementSibling.innerText = "Enter Only 16 Digit";
                FormData[name] = null;
            }
            handle_submit();
             
         
        }

       function handle_submit(){
        let {phone_no,registation_no,card_no} =FormData;
        console.log(FormData);
        if(phone_no != null && registation_no != null && card_no != null){
            // document.getElementById("check_activation").disabled=false;
            document.getElementById("check_activation").addEventListener('click',function () {
                console.log(FormData)
                try {              
                fetch('add_physical_card_no', {
                method: 'POST',
                body:JSON.stringify(FormData),
                headers: new Headers({
                        'Content-Type': 'application/json',  
                    })})
                .then(response => response.json())
                .then(data => {
                    debugger;
                    console.log(data);
                    
                    if(data['condition'] == true){
                        swal("Thanks !", `${data['message']}`, "success");

                        
                    }else{
                        swal("Opps !", `${data['message']}`, "error");


                    }

                    return ;
                })
               } catch (error) {
                swal("Opps !", `Something went wrong`, "error");

                console.error(error);
               }
                
               
            })
        }else{
            // document.getElementById("check_activation").disabled=true;
        }
        }
    </script>
 @endsection;