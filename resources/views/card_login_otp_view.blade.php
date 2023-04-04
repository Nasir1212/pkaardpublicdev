@extends('master')

@section('content')
<style>

 

</style>
<section>
  
    <div class="row">

        <form action="/purchase_details">
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
            <input type="hidden" value="" name="reference_code" class="form-control" id="">
            <small id="" class="form-text text-muted"> </small>
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <button path="/purchase_details" class="btn btn-warning  btn-block btn-sm">Submit </button>
        </div>
    
    </form>
        </div>
</section>

<script>
    

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