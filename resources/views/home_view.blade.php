@extends('master')

@section('content')

<style>
   .drop_down_bottom {
	position: absolute;
	background: white;
	width: 100%;
	border: 0.1px solid #0000002e;
	padding: 1rem;
	border-radius: 5px;
	margin-top: 2px;
	z-index: 2;
    
}
    .drop_down_bottom ul{
        overflow-y: scroll;
        width: 100%;
        height: 20rem;
    }
    .drop_down_bottom ul li {
    cursor: pointer;
    margin-bottom: 4px;
    background: #0000000d;
    padding: 1rem;
}
.drop_down_bottom ul li:hover{
    background: #00000045;
}
.custom_form {
	height: 5rem;
	border-radius: 1rem;
	margin-bottom: 0.5rem;
}

@media screen and (max-width: 455px){
.drop_down_bottom {  
width: 94%;
position: fixed;
z-index: 200;
top: 11px;
margin: 0 -1.5rem;
}

.dist{
    margin: 0px -12rem !important;
}
    }

    /* element {
	position: fixed;
	top: 58px;
	z-index: 500;
	width: 94%;
	margin: 0 auto;
	border-radius: 10px;
	left: 0;
	right: 0;
} */

</style>
<div class="slideing_box_container">

    <div class="top_slider_container " id="slider_top">
        <div class="slider_col slider_col_top">
            <img src="./assets/images/sliding_to_1.jpeg" alt="">
        </div>

        <div class="slider_col slider_col_top">
            <img src="./assets/images/sliding_to_2.jpeg" alt="">
        </div>

        <div class="slider_col slider_col_top">
            <img src="./assets/images/sliding_to_3.jpeg" alt="">
        </div>

        <div class="slider_col slider_col_top">
            <img src="./assets/images/sliding_to_4.jpeg" alt="">
        </div>
    </div>

    <div class="bottom_slider_container">

  

    <div class="botto_right_slider_container botto_slider">

        <div class="slider_col bottom_right_slider_col">
            <img src="./assets/images/sliding_to_bottom_right_1.jpeg" alt="">
        </div>

        <div class="slider_col bottom_right_slider_col">
            <img src="./assets/images/sliding_to_bottom_right_2.jpeg" alt="">
        </div>

      

        
    </div>

    <div class="bottom_left_slider_container  botto_slider">
        <div class="slider_col  bottom_left_slider_col">
            <img src="./assets/images/sliding_to_bottom_left_2.jpeg" alt="">
        </div>

        <div class="slider_col  bottom_left_slider_col">
            <img src="./assets/images/sliding_to_bottom_left_1.jpeg" alt="">
        </div>
    </div>

    

</div>
</div>

<div>
    
    
<section class="search_home_option card">
    <div class="row card-body">
        <div class="col-6">
            <div class="form-group" style="position:relative" data-select2-id="29">
             <label for="">Select Category</label>
                <input type="text" class="form-control custom_form" onfocusin="focusin(this)" onfocusout="focusout(this)" onkeyup="search_category(this);" placeholder="Select Category">
                <div class="drop_down_bottom d-none">
                    <ul id="drop_list_1">
                        <li>Travel</li>
                        <li>Hotel & Resort</li>
                        <li>Entertainment</li>
                        <li>Constructions & Constructor</li>
                        <li>Travel</li>
                        <li>Hotel & Resort</li>
                        <li>Entertainment</li>
                        <li>Constructions & Constructor</li>
                    </ul>
                </div>
               
              </div>

        </div>
        <div class="col-6">
            <div class="form-group" style="position:relative" data-select2-id="29">
                <label for="">Select District</label>
                   <input type="text" class="form-control custom_form"  onfocusin="focusin(this)" onfocusout="focusout(this)"  onkeyup="search_district(this);" placeholder="Select Category">
                   <div class="drop_down_bottom  dist d-none ">
                       <ul id="drop_list_2">
                             
                       </ul>
                   </div>
                  
                 </div>
          
        </div>

        <div class="col-12">
            <div class="w-100 d-flex justify-content-center mb-1" >
               
                 <a href="/product_view" class="btn btn-info btn-block w-50">Search </a>
          
        </div>
    </div>
   
</section>

</div>

<div class="box_container">

    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/travel.jpeg" alt="">
        </div>                               
    </div>
   
    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/entertainment.jpeg" alt="">
        </div>                               
    </div>

    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/hotel_and_resort.jpeg" alt="">
        </div>                               
    </div>
   
      <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/legal_and_financial.jpeg" alt="">
        </div>                               
    </div>
   
    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/home_and_decor.jpeg" alt="">
        </div>                               
    </div>
   
    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/personal_care_and_service.jpeg" alt="">
        </div>                               
    </div>
   
    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/constructions_and_constructor.jpeg" alt="">
        </div>                               
    </div>
   
    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/food_and_dinning.jpeg" alt="">
        </div>                               
    </div>
   
    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/fashion.jpeg" alt="">
        </div>                               
    </div>

    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/shues.jpeg" alt="">
        </div>                               
    </div>
   
    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/photography.jpeg" alt="">
        </div>                               
    </div>
   
    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/jewelry.jpeg" alt="">
        </div>                               
    </div>
   
    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/real_estate_and_development.jpeg" alt="">
        </div>                               
    </div>
   
   
    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/teleo_and_securites_and_communication.jpeg" alt="">
        </div>                               
    </div>
   
    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/logistics_and_transportation.jpeg" alt="">
        </div>                               
    </div>
   
    <div class="box box_relative">
        <div class="box_img box_absolute">
            <img src="./assets//images/business_support_and_supplies.jpeg" alt="">
        </div>                               
    </div>
   
   
    
   
   


</div>

<script>
  
  
  let slider_col_top= document.getElementsByClassName("slider_col_top")

let bottom_left_slider_col =  document.getElementsByClassName("bottom_left_slider_col")

let bottom_right_slider_col =  document.getElementsByClassName("bottom_right_slider_col")


let d = 1;
let r = 1;
let l = 1;
setInterval(() => {
d++;
r++;
l++;
if(d > slider_col_top.length){
d=1;

}

if(r  > bottom_right_slider_col.length){
   r = 1;
}

if(l  > left_bottom_slider.length){
   l = 1;
}

   top_sliding(d)
   right_bottom_slider(r);
   left_bottom_slider(l)


}, 3000);

function top_sliding(value){
   for (const x of slider_col_top) {
  x.style.display='none'
}
slider_col_top[value-1].style.display='block'
}


function right_bottom_slider(value){
   for (const x of bottom_right_slider_col) {
  x.style.display='none'
}
bottom_right_slider_col[value-1].style.display='block'
}

function left_bottom_slider(value){
   for (const x of bottom_left_slider_col) {
  x.style.display='none'
}
bottom_left_slider_col[value-1].style.display='block'
}



    function search_category (evt){
      let input_value =   evt.value.toUpperCase();
      
      let li = drop_list_1.getElementsByTagName('li')
    

    for (let i = 0; i < li.length; i++) {
   
    if (li[i].innerHTML.toUpperCase().indexOf(input_value) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }


    }


    function search_district (evt){
    let input_value =   evt.value.toUpperCase();
    let li = drop_list_2.getElementsByTagName('li')
    for (let i = 0; i < li.length; i++) {
   
    if (li[i].innerHTML.toUpperCase().indexOf(input_value) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }

    }


        function load_district(){
        let li = '';
        District.forEach(function (data){
        li  += `<li  data-id="${data['id']}"  value="${data['name']}">${data['name']}</li>`;

        })
        drop_list_2.innerHTML = li
    }

    load_district();

   function focusin (evt){
    console.log(evt.nextElementSibling)
    evt.nextElementSibling.classList.remove("d-none");
   }

   function focusout(evt){
    console.log(evt.nextElementSibling)
    // evt.nextElementSibling.classList.add("d-none");

   console.log( evt.nextElementSibling.children[0].children)

         let li =   evt.nextElementSibling.children[0].children
console.log(li[0].tagName)

        for (let i = 0; i < li.length; i++) {
   


  li[i].onclick=function(){
    
   
    if(this.tagName=='LI'){
        evt.value = this.innerText
     evt.nextElementSibling.classList.add("d-none");

    }

  }
 }
   }

</script>
 @endsection;