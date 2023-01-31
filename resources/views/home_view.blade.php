@extends('master')

@section('content')


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


</script>
 @endsection;