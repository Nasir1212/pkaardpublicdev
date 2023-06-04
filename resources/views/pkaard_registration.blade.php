@extends('master')

@section('content')
<style>
    /* .d-none{
        display: block !important


    } */
</style>

<div class="registration_container">
    <div id="stepper-example" class="bs-stepper">
        <div class="bs-stepper-header">
          <div class="step" data-target="#test-l-1">
            <a href="#">
              <span class="bs-stepper-circle bg-warning font-weight-bold ">1</span>
              <span class="bs-stepper-label">step One</span>
            </a>
          </div>
          <div class="line"></div>
          <div class="step" data-target="#test-l-2">
            <a href="#">
              <span class="bs-stepper-circle  bg-danger  font-weight-bold ">2</span>
              <span class="bs-stepper-label">step Two</span>
            </a>
          </div>
          <div class="line"></div>
          <div class="step" data-target="#test-l-3">
            <a href="#">
              <span class="bs-stepper-circle  bg-danger  font-weight-bold ">3</span>
              <span class="bs-stepper-label">step Three</span>
            </a>
          </div>
        </div>
        
      </div>

    <div class="form registration_steping registration_step_one ">

            <h4 class="text-warning text-center font-weight-bold mb-3">Step One</h4>     

     <div>
           

<form name="Step_one_data">
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






<div class="form-group col-12">
<button type="button" class="btn btn-danger btn-outline-warning text-white font-weight-bold float-right" onclick="steap_one()">next</button>
</div>

</div>

</form>

           
        </div>
    </div>

    <div class="form registration_steping  registration_step_two d-none">

        <h4 class="text-warning text-center font-weight-bold mb-3">Step Two</h4>     

    <div>
        

    <form name="Step_two_data">
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
        <input type='text' name="date_of_birth"  placeholder="dd/mm/yyyy" class="form-control"id="datetimepicker4"/>
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
    
    


    <div class="form-group col-12 d-flex justify-content-between">

    <button type="button" onclick="back_form(2)" class="btn btn-danger btn-outline-warning text-white font-weight-bold ">Back</button>
    <button type="button" class="btn btn-warning btn-outline-danger  text-white font-weight-bold  " onclick="steap_two();">Next</button>
    </div>

    </div>

    </form>

        
    </div>
    </div>

    <div class="form registration_steping  registration_step_three d-none">

        <h4 class="text-warning text-center font-weight-bold mb-3">Step Three</h4> 
        <h5 class="text-danger text-center font-weight-bold mb-3" style="font-size: 1.8rem;">Card Delivery Address </h5>    
        <h5 class="text-danger text-center font-weight-bold mb-3" style="font-family: 'Bangla', Arial, sans-serif !important;">(কার্ড পাঠানোর ঠিকানা) </h5>    
    <div>
        

    <form name="Step_three_data">
    <div class="row">

    <div class="form-group col-lg-6 col-md-6 col-sm-12">
    <label for="" class="text-capitalize"> Apartment No  (এপার্টমেন্ট  নং) <i class="text-danger d-none">*</i> </label>
    <input type="text"class="form-control" name="cda_apartment_no" id="" aria-describedby="emailHelp" placeholder=" Apartment No ">
    <small id="" class="form-text text-muted"> </small>
    </div>


    <div class="form-group col-lg-6 col-md-6 col-sm-12" >
    <label for=""  class="text-capitalize"> House No <b> /</b> Holding No (বাসা নং)  <i class="text-danger d-none">*</i></label>
    <input type="text"  class="form-control text-capitalize" name="cda_house_no" id="" placeholder="House No / Holding No">
    <small id="" class="form-text text-muted"> </small>
    </div>


    <div class="form-group col-lg-6 col-md-6 col-sm-12">
    <label for=""  class=""> Road No  (রোড নং) <i class="text-danger d-none">*</i></label>
  
    <input type="text" placeholder="Road No " name="cda_road_no" class="form-control datetimepicker-input" data-target="#reservationdate">
    <small id="" class="form-text text-muted"> </small>

    </div>
    
    <div class="form-group col-lg-6 col-md-6 col-sm-12">
    <label for="" class="text-capitalize"> Area  <b> /</b> Village   (এলাকা  <b> /</b> গ্রাম) <i class="text-danger  d-none">*</i> </label>
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
        <select name="cda_district" id="cda_district" class="form-control">
        <option value="">Select District</option>
       
        </select>
        <small id="" class="form-text text-muted"> </small>
        </div>



        <div class="form-group col-lg-6 col-md-6 col-sm-12" >
        <label for="">Upzilla ( উপজেলা ) </label>

        <input type="text" name="cda_upzilla" id="cda_upzilla" placeholder="Upzilla"  class="form-control">

        {{-- <select name="cda_upzilla" id="cda_upzilla" class="form-control">
        <option value="">Select Upzilla</option>
        </select> --}}
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

      <div class="form-group col-12">
    <div class="form-check ">
        <input type="checkbox" class="form-check-input" name="agree_condition" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">I have Read the terms and conditions and I agree to the terms of Data usage. (আমি তথ্যের ব্যবহার বিষয়ক শর্তাবলী পড়েছি এবং সম্মতি প্রদান করছি)  <i class="text-danger">*</i></label>
      
    </div>
    <small id="check_box_error_message" class="form-text text-muted"> </small>
</div>

    <div class="form-group col-12 d-flex justify-content-between">
        <button type="button" class="btn btn-danger btn-outline-warning text-white font-weight-bold"  onclick="back_form(3)" >Back</button>
        <button type="button" href="invoic_page.html" onclick="pkaard_submit_data()" class="btn btn-warning btn-outline-danger  text-white font-weight-bold ">Submit</button>
    </div>

    </div>

   
    </div>

    </form>

        
    </div>

    </div>

   </div>


</form>


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
   

   <script>

    $(function () {
    $('#datetimepicker4').datetimepicker({
        format: 'DD/MM/YYYY',
        viewMode: 'years',
        icons: {
                  time: "fa fa-clock-o",
                  date: "fa fa-calendar",
                   up: "fa fa-arrow-up",
                   down: "fa fa-arrow-down"
               }
         
    });
    });

    


    let registration_steping =  document.getElementsByClassName("registration_steping");
    let bs_stepper_circle =  document.getElementsByClassName("bs-stepper-circle");
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
   
   function steap_one(){

        let Step_one_data = Object.fromEntries(new FormData(document.forms['Step_one_data']));
     
        mandatory_message(Step_one_data)      
        if(Step_one_data['email'].length >0 &&  Step_one_data['phone_number'].length >0  &&  Step_one_data['mediam'].length >0 ){

            registration_steping[0].classList.add("d-none")
            registration_steping[1].classList.remove("d-none")
            bs_stepper_circle[1].classList.remove("bg-danger")
            bs_stepper_circle[1].classList.add("bg-warning")
        }
        
        
    }

    function steap_two(){
        let Step_two_data = Object.fromEntries(new FormData(document.forms['Step_two_data']));
        mandatory_message(Step_two_data)
        if(Step_two_data['full_name'].length >0 && Step_two_data['nationality'].length >0 && Step_two_data['date_of_birth'].length >0 && Step_two_data['gender'].length >0 && Step_two_data['division'].length >0 && Step_two_data['district'].length >0 && Step_two_data['profession'].length >0 ){

            registration_steping[1].classList.add("d-none")
            registration_steping[2].classList.remove("d-none")
            bs_stepper_circle[2].classList.remove("bg-danger")
            bs_stepper_circle[2].classList.add("bg-warning")
      }            
    }


    function pkaard_submit_data(){

  
let Step_three_data = Object.fromEntries(new FormData(document.forms['Step_three_data']));
let Step_two_data = Object.fromEntries(new FormData(document.forms['Step_two_data']));
let Step_one_data = Object.fromEntries(new FormData(document.forms['Step_one_data']));

mandatory_message(Step_three_data)      

document.getElementById(`check_box_error_message`).innerHTML ='';
if(document.getElementsByName(`agree_condition`)[0].checked == false){
 document.getElementById(`check_box_error_message`).innerHTML = `<p class='text-danger'> please ! check box in mandatory </P>`
}

let modal_content = /*html*/`
<div>
    <p><b>Check your info </b></p>
        <table class="table">

            <tbody>
            <tr>
                <th>Phone </th>
                <td>${Step_one_data['phone_number']}</td>
            </tr>
            <tr>
                <th>Email </th>
                <td>${Step_one_data['email']}</td>
            </tr>

            <tr>
                <th>Mediam </th>
                <td>${Step_one_data['mediam']}</td>
            </tr>

            

            <tr>
                <th>Reference Code </th>
                <td>${Step_one_data['reference_code']}</td>
            </tr>

            <tr>
                <th>Name</th>
                <td>${Step_two_data['full_name']}</td>
            </tr>

              <tr>
                <th>Nationality</th>
                <td>${Step_two_data['nationality']}</td>
            </tr>

              <tr>
                <th>date  of birth</th>
                <td>${Step_two_data['date_of_birth']}</td>
            </tr>

              <tr>
                <th>Gender</th>
                <td class="text-capitalize">${Step_two_data['gender']}</td>
            </tr>

              <tr>
                <th>Division</th>
                <td>${Step_two_data['division']}</td>
            </tr>

              <tr>
                <th>District</th>
                <td>${Step_two_data['district']}</td>
            </tr>
           
            <tr>
                <th>Profession</th>
                <td>${Step_two_data['profession']}</td>
            </tr>
           

            
            </tbody>
        </table>
        <h5 class="text-danger text-align-center">Card Delivery Address</h5>
        <table  class="table">
            
            <tbody >
                <tr>
                    <th>Apartment no</th>
                    <td>${Step_three_data['cda_apartment_no']}</td>
                </tr>
                 <tr>
                    <th> House / Holding no</th>
                    <td>${Step_three_data['cda_house_no']}</td>
                </tr>
                <tr>
                    <th>Road no</th>
                    <td>${Step_three_data['cda_road_no']}</td>
                </tr>
                 <tr>
                    <th> Area /  Village</th>
                    <td>${Step_three_data['cda_village']}</td>
                </tr>
                 <tr>
                    <th>Division</th>
                    <td>${Step_three_data['cda_division']}</td>
                </tr>
                 <tr>
                    <th>District</th>
                    <td>${Step_three_data['cda_district']}</td>
                </tr>
                 <tr>
                    <th>Upzilla</th>
                    <td>${Step_three_data['cda_upzilla']}</td>
                </tr>
                <tr>
                    <th>Police station/Thana</th>
                    <td>${Step_three_data['cda_Thana']}</td>
                </tr>
              
                 <tr>
                    <th>Address details</th>
                    <td>${Step_three_data['cda_address_details']}</td>
                </tr>
                
            </tbody>


        </table>
    
</div>

`;

document.getElementById("preview_body").innerHTML = modal_content
//Step_three_data['cda_apartment_no'].length >0 && Step_three_data['cda_house_no'].length >0 && Step_three_data['cda_road_no'].length >0 &&  Step_three_data['cda_village'].length >0 && 

if(  Step_three_data['cda_division'].length >0 && Step_three_data['cda_district'].length >0  && Step_three_data['cda_address_details'].length >0 && document.getElementsByName(`agree_condition`)[0].checked == true ){
    $('#exampleModal').modal('show')
}



}



function back_form(evt){

    if(evt==2){
    registration_steping[0].classList.remove("d-none")
    registration_steping[1].classList.add("d-none")
    bs_stepper_circle[1].classList.add("bg-danger")
    bs_stepper_circle[1].classList.remove("bg-warning")
    }

    if(evt ==3){
    registration_steping[1].classList.remove("d-none")
    registration_steping[2].classList.add("d-none")
    bs_stepper_circle[2].classList.add("bg-danger")
    bs_stepper_circle[2].classList.remove("bg-warning")
    }
    
}

   function mandatory_message(input_data){
    let elem ='';
    for (const key in input_data) {
          
          if(key=='reference_code' || key=='agree_condition' || key == 'cda_upzilla' || key=='cda_apartment_no' || key=='cda_house_no' || key=='cda_road_no' || key=='cda_village'){
          continue
          }
          elem = document.getElementsByName(`${key}`)[0]
          elem.nextElementSibling.innerHTML='';
         
          if(elem.value.length  == 0 ){             
              elem.nextElementSibling.innerHTML = `<p class='text-danger'> please ! <b class='text-warning'>${elem.previousElementSibling.innerText}</b> is mandatory</p>`   
          }
          
          
      }

   }

   

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
//cda 
    function handle_cda_division(e){
        let opData = '<option value="">Select District</option> ';
        
       District.forEach(function (data){

        if(data['division_id']== e.options[e.selectedIndex].dataset.id){

        opData += `<option  data-id="${data['id']}"  value="${data['name']}">${data['name']}</option>`;

    }
        })
       document.getElementById('cda_district').innerHTML = opData

    }


    

    function handle_cda_district(e){

let opData = '<option value="">Select Upzilla</option> ';

Upazilas.forEach(function (data){

if(data['district_id']== e.options[e.selectedIndex].dataset.id){

opData += `<option  data-id="${data['id']}"  value="${data['name']}">${data['name']}</option>`;

}
})
document.getElementById('cda_upzilla').innerHTML = opData


}

var  all_data = '';
var generating_otp = '';



function final_checking(){
    let Step_three_data = Object.fromEntries(new FormData(document.forms['Step_three_data']));
    let Step_two_data = Object.fromEntries(new FormData(document.forms['Step_two_data']));
    let Step_one_data = Object.fromEntries(new FormData(document.forms['Step_one_data']));


     all_data={
        
        ...Step_one_data,
        ...Step_two_data,
        ...Step_three_data,
    }


    $('#exampleModal').modal('hide')


 sessionStorage.setItem("user_form_data", JSON.stringify(all_data));

  
is_phone_exit();
}


// function submit_otp(){
    
   

//    let otp =  document.getElementsByName('otp_code')[0].value;

//     if( otp.length ==6 && otp == generating_otp ){
          

//           send_data_in_server(all_data);

//       }else{
     

// swal("Opps !", "OTP not correct", "error");
//       }
// }

// function generateOTP() { 
          
// // Declare a digits variable  
// // which stores all digits 
// var digits = '0123456789'; 
// let OTP = ''; 
// for (let i = 0; i < 6; i++ ) { 
// OTP += digits[Math.floor(Math.random() * 10)]; 
// }
// return OTP; 
//       } 
    

//       function send_otp_number(){
//         generating_otp =  generateOTP();
    

//     fetch(`otp/${all_data['phone_number']}/${all_data['email']}/${generating_otp}`)
//        .then(response => response.json())
//        .then(data => {
       
//         console.log(data)
//         if(data['condition']==true){
//             $.toast({
//     heading: 'successfully ',
//     text: 'OTP have sent in your phone and mail',
//     icon: 'info',
//     loader: true,        // Change it to false to disable loader
//     loaderBg: '#9EC600'  // To change the background
// }) 
//         }
          
//        })
//        document.getElementById("resend_btn").disabled = true;
//        setTimeout(() => {
//         console.log('Hellow Woorld')
//         document.getElementById("resend_btn").disabled = false;
//        }, 60000);


//       }

//      function  send_data_in_server(server_data){


// fetch('card_registation_add', {
//     method: 'POST',
//     body:JSON.stringify(server_data),
//     headers: new Headers({
//                 'Content-Type': 'application/json',
              
//             })
//   })
//   .then(response => response.json())
//   .then(data => {
//     console.log(data)
//     fetch(`send_invoice_mail/${all_data['email']}` )
//     .then(response => response.text())
//     .then(d => {
//         console.log('invoice sending status',d)

//         if(data['condition']==true){
//         swal("successfully", "you have Registerd for card", "success");
//         setTimeout(() => {
      
//         location.href = `${location.origin}/invoice/${data['phone']}`;
//        }, 2000);

      
//     }else{
//         swal("Opps !", "something went wrongpp", "error");
//     }
//     });
    
   
//   })



//      }

    


    //  }

    //  send_data_in_server('e');


    function is_phone_exit(){

let phone_data ={
    phone:all_data['phone_number']
}

fetch('is_phone_exit', {
method: 'POST',
body:JSON.stringify(phone_data),
headers: new Headers({
        'Content-Type': 'application/json',
      
    })
})
.then(response => response.json())
.then(data => {
console.log(data)
if(data['is_exit_phone']==true){
    swal("OTP failed !", "your phone is already used", "error");
    return true;

}else{

  location.href = `${location.origin}/otp_view`;
   
}
})



}



   </script>

@endsection