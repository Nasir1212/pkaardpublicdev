<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pkaard Registation</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->


    <style>

       
        
    .ref_number_box {
    display: grid;
    grid-template-columns: repeat(6,1fr);
    gap: 1rem;
}

.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem;
}

</style>

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-12" style="width: 95%;margin: auto;">

            <div class="card">
     
    <div class="card-header">
        <h3 class="card-title">Add Your Card User</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <div class="registration_container">
            
            <div class="form registration_steping registration_step_one ">
        
                    <h4 class="text-warning text-center font-weight-bold mb-3">Step One</h4>     
        
             <div>
                   
        
        <form name="form_data">
        <div class="row">
        
        <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for="">Phone Number ( মোবাইল নাম্বার )  <i class="text-danger">*</i></label>
            <input type="text" name="phone_number" class="form-control" id="" placeholder="Phone Number">
            <small id="" class="form-text text-muted"> </small>
        </div>
        
        
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for=""> Email (ইমেইল) <i class="text-danger">*</i></label>
            <input type="text" name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder=" Email Address ">
            <small id="" class="form-text text-muted"> </small>
        </div>
        
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="">How did you hear about the Pkaard?  (আপনি Pkaard সম্পর্কে কোন মাধ্যম থেকে জেনেছেন) <i class="text-danger">*</i></label>
            <select  name="mediam" id="" class="form-control">
                <option value="">Select Your Choice</option>
                <option value="Website">Website</option>
                <option value="Facebook">Facebook</option>
                <option value="LinkedIn">LinkedIn</option>
                <option value="Instagram">Instagram</option>
                <option value="What’s App ">What’s App </option>
                <option value="Email">Email</option>
                <option value="Friends/Family">Friends/Family</option>
                <option value="Promotional SMS">Promotional SMS</option>
                <option value="District Coordinator ">District Coordinator </option>
                <option value="Social Influencer ">Social Influencer </option>
                <option value="Advertisement ">Advertisement </option>
                <option selected='true' value="BACKHAND ">BACKHAND </option>
                <option value="Other">Other </option>
            </select>
            <small id="" class="form-text text-muted"> </small>
        </div>
        
        
        <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for="">Reference Code (রেফারেন্স কোড )</label>
            <div class="ref_number_box">
                <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="1">
                <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="2">
                <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="3">
                <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="4">
                <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="5">
                <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="6">
               
            </div>
            <input type="hidden" value="" name="reference_code" class="form-control" id="">
            <small id="" class="form-text text-muted"> </small>
        </div>
        
        
        
        
        
        
      
        
        </div>
        
       
        
                   
                </div>
            </div>
        
            <div class="form registration_steping  registration_step_two  ">
        
                <h4 class="text-warning text-center font-weight-bold mb-3">Step Two</h4>     
        
            <div>
                
        
          
            <div class="row">
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="" class="text-capitalize"> Full Name in English  (ইংরেজিতে পূর্ণ নাম ) <i class="text-danger">*</i> </label>
            <input type="text"class="form-control" name="full_name" id="" aria-describedby="emailHelp" placeholder="Name">
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for=""  class="text-capitalize"> nationality(জাতীয়তা)  <i class="text-danger">*</i></label>
            <input type="text" value="Bangladeshi" name="nationality" class="form-control text-capitalize" id="" placeholder="nationality">
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
           
        
        
            
            <div class="form-group  col-lg-6 col-md-6 col-sm-12">
                <label for="" class="text-capitalize"> Date of Birth (জন্ম তারিখ)<i class="text-danger">*</i> </label>
               
                <input type="text" id="datemask"  name="date_of_birth" class="form-control" placeholder="dd/mm/yyyy" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
                
                <small id="" class="form-text text-muted"> </small>
               
             </div>
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for="">Gender (লিঙ্গ )  <i class="text-danger">*</i></label>
            <select name="gender" id="" class="form-control">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>
            </select>
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for="">Division (বিভাগ )  <i class="text-danger">*</i></label>
            <select name="division" id="division" onchange="handle_division(this)" class="form-control">
            <option value="">Select Division</option>
            
            </select>
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for="">District (জেলা )  <i class="text-danger">*</i></label>
            <select name="district" id="district"  class="form-control">
            <option value="">Select District</option>
           
            </select>
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="" class="text-capitalize"> Profession  (পেশা) <i class="text-danger">*</i> </label>
                <input type="text"class="form-control" name="profession" id="" aria-describedby="emailHelp" placeholder=" Profession ">
                <small id="" class="form-text text-muted"> </small>
                </div>
            
        
        
            </div>
        
       
        
                
            </div>
            </div>
        
            <div class="form registration_steping  registration_step_three  ">
        
                <h4 class="text-warning text-center font-weight-bold mb-3">Step Three</h4> 
                <h5 class="text-danger text-center font-weight-bold mb-3" style="font-size: 1.8rem;">Card Delivery Address </h5>    
                <h5 class="text-danger text-center font-weight-bold mb-3" style="font-family: 'Bangla', Arial, sans-serif !important;">(কার্ড পাঠানোর ঠিকানা) </h5>    
            <div>
                
        
            <div class="row">
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="" class="text-capitalize"> Apartment No  (এপার্টমেন্ট  নং) <i class="text-danger">*</i> </label>
            <input type="text"class="form-control" name="cda_apartment_no" id="" aria-describedby="emailHelp" placeholder=" Apartment No ">
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for=""  class="text-capitalize"> House No <b> /</b> Holding No (বাসা নং)  <i class="text-danger">*</i></label>
            <input type="text"  class="form-control text-capitalize" name="cda_house_no" id="" placeholder="House No / Holding No">
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for=""  class=""> Road No  (রোড নং) <i class="text-danger">*</i></label>
          
            <input type="text" placeholder="Road No " name="cda_road_no" class="form-control " >
            <small id="" class="form-text text-muted"> </small>
        
            </div>
            
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="" class="text-capitalize"> Area  <b> /</b> Village   (এলাকা  <b> /</b> গ্রাম) <i class="text-danger">*</i> </label>
            <input type="text"class="form-control" id="" name="cda_village" aria-describedby="emailHelp" placeholder=" Area / Village ">
            <small id="" class="form-text text-muted"> </small>
            </div>
        
            
            <div class="form-group col-lg-6 col-md-6 col-sm-12" >
                <label for="">Division (বিভাগ )  <i class="text-danger">*</i></label>
                <select name="cda_division" id="cda_division" onchange="handle_cda_division(this)" class="form-control">
                <option value="">Select Division</option>
               
                </select>
                <small id="" class="form-text text-muted"> </small>
                </div>
        
        
        
                <div class="form-group col-lg-6 col-md-6 col-sm-12" >
                <label for="">District (জেলা )  <i class="text-danger">*</i></label>
                <select name="cda_district" id="cda_district"  class="form-control">
                <option value="">Select District</option>
               
                </select>
                <small id="" class="form-text text-muted"> </small>
                </div>
        
        
        
                <div class="form-group col-lg-6 col-md-6 col-sm-12" >
                <label for="">Upzilla ( উপজেলা ) </label>
                <input type="text"  name="cda_upzilla"  id="cda_upzilla" placeholder="Upzilla"   class="form-control">
                
                <small id="" class="form-text text-muted"> </small>
                </div>
        
                <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for=""  class="text-capitalize"> Police station <b> /</b> Thana (থানা )  <i class="text-danger">*</i></label>
            <input type="text"  class="form-control text-capitalize" name="cda_Thana" id="" placeholder="Police station /  Thana ">
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
        
        
        
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label for="" class="text-capitalize"> Address in Details   (বিস্তারিত ঠিকানা) <i class="text-danger">*</i> </label>
            <textarea type="text"class="form-control"rows="5" id="" name="cda_address_details" placeholder="Address in Details" aria-describedby="emailHelp"></textarea>
            <small id="" class="form-text text-muted"> </small>
            </div>
        
             

    </form>
        
            <div class="form-group col-12 d-flex justify-content-between">
               
                <button type="button" style="margin-left: 2rem" onclick="pkaard_submit_data()" class="btn btn-warning btn-outline-danger  text-white font-weight-bold ">Submit</button>
            </div>
        
            </div>
        
           
            </div>
      
        
                
            </div>
        
            </div>
        
           </div>
        
        
        
        
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
               
                <div class="modal-body" id="preview_body">
                    
                      
                     
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick="final_checking()">OK</button>
                </div>
              </div>
            </div>
          </div>
           
        
        
        
      </div>
      <!-- /.card-body -->

            
            </div>
        </div>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://office.pkaard.com/assets/js/bd_data.js"></script>
  <script>
        
var form_data  = '';

window.onload = function (){
        let opData = '<option value="">Select Division</option> ';

        division.forEach(function (data){

        opData += `<option data-id="${data['id']}" value="${data['name']}">${data['name']}</option>`;
    })
    document.getElementById('division').innerHTML = opData

    document.getElementById('cda_division').innerHTML = opData
    }

    function handle_division(e){
        let opData = '<option value="">Select District</option> ';

       District.forEach(function (data){

        if(data['division_id']== e.options[e.selectedIndex].dataset.id){

        opData += `<option  data-id="${data['id']}"  value="${data['name']}">${data['name']}</option>`;

    }
        })
       document.getElementById('district').innerHTML = opData

    }


function handle_cda_division(e){
        let opData = '<option value="">Select District</option> ';
        
       District.forEach(function (data){

        if(data['division_id']== e.options[e.selectedIndex].dataset.id){

        opData += `<option  data-id="${data['id']}"  value="${data['name']}">${data['name']}</option>`;

    }
        })
       document.getElementById('cda_district').innerHTML = opData

    }

    function pkaard_submit_data(){
        form_data = Object.fromEntries(new FormData(document.forms['form_data']));

        console.log(form_data)

        
fetch('card_registation_add', {
    method: 'POST',
    body:JSON.stringify(form_data),
    headers: new Headers({
                'Content-Type': 'application/json',
              
            })
  })
  .then(response => response.json())
  .then(data => {
if(data['condition']==true){
    swal("successful", "Successfully Registation", "success"); 
}else{
    swal("Opps!", "Something went wrong", "error"); 
}
    

  })

    }


    </script>

</body>
</html>