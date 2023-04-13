@extends('master')

@section('content')

<style>
    .d_c_s_img_container {
	height: 15rem;
	width: 59%;
	margin: 0 auto;
}

.d_c_s_img_col {
	width: 90%;
	height: 10rem;
    margin: 0 auto;
}

/* .d_c_s_img_col img{
    width: 100%;
} */
.d_c_s_img {
    margin: 0.5rem;
    cursor: pointer;
    overflow: hidden;
    width: 100%;
    height: 100%;
}
.d_c_s_img  img:hover{
    opacity: 1;
}

.d_c_s_img img {
    opacity: 0.8;
    z-index: 1000 !important;
    overflow: hidden;
}

.round {
    border-radius: 50%;
    font-size: 1.2rem;
    z-index: 1;
    position: absolute;
    top: 37%;
}
.prev_next_btn {
    display: inline-block;
    padding: 8px 16px;
    background-color: #f1f1f1;
    color: black;
    cursor: pointer;
    
}
.prev{
    right: 0;
}

.next{
    left: 0;
}
.prev_next_btn:hover {
  background-color: #ddd;
  color: black;
}


.prev_next_btn_container {
	width: 100%;
	margin: 0 auto;
	position: absolute;
	top: 68px;
    
}
.info_container {
    padding: 0.5rem 1.5rem;
}

.title_box i {
    font-size: 1.2rem;
    font-style: normal;
    font-family: auto;
}



@media screen and (max-width: 455px){
.discount_btn {
    position: fixed;
    bottom: 0px;
    width: 100%;
    right: 0;
    left: 0;
    z-index: 100;
}

.d_c_s_img_container {
    width: 90%;
}

.d_c_s_img_col {
    height: 4rem;
}

.prev_next_btn_container {
    top: 25%;
}


}
</style>
<section class="">
  
{{-- @dd($product_data) --}}
    @php 
   $img_path_array = explode(",", $product_data[0]->img_path);
    @endphp
    <div>
        <div class="d_c_s_content_image_container">
            <div class="d_c_s_img_container">
                <img id="main_img" src="https://img.pkaard.com/images/{{$img_path_array[0]}}" alt="">
            </div>
            <hr>
            <div style="position: relative">
          
            <div class="d_c_s_img_col d-flex">

                @foreach($img_path_array as $img)
                <div class="d_c_s_img">
                    <img src="https://img.pkaard.com/images/{{$img}}" alt="">
                </div>
                @endforeach
               
                            
            </div>

            {{-- <div class="prev_next_btn_container d-flex justify-content-between "> --}}
                <div onclick="prev_btn()" class="round prev_next_btn  next">&#8249;</div>
                <div onclick="next_btn()" class="round prev_next_btn  prev">&#8250;</div>
            {{-- </div> --}}
            </div>
            <div class="info_container">
            <div class="title_box">
                <p><b class="text-muted">Name :- </b> <i> {{$product_data[0]->title}}</i></p>
                <p><b class="text-muted">Category :- </b>  <i> {{$product_data[0]->category_name}}</i></p>
            </div>
            <div class="localtion_box">
                <p><b class="text-muted">District :-  </b>  {{$product_data[0]->district_name}} </p>
                <p><b class="text-muted">Location :- </b>  <i>  {{$product_data[0]->address }}</i> </p>
                
            </div>
            <div class="prize_box">
                <p><b class="text-muted">Prize :- </b>  {{$product_data[0]->regular_price }} TK</p>
                <p><b class="text-muted">Discount :- </b> 50% </p>
            </div>

           
            <div class="discription_box">
                <h4 class="text-muted">Details </h4>
                <hr>
                
                {{html_entity_decode($product_data[0]->details)}}
            </div>
            <div class="discount_btn">
                <a class="btn btn-warning btn-block btn-lg" href="#">Get Discount</a>
            </div>
            <br>

        </div>
        </div>
    </div>
</section>


<section style="display:none">
    <div class="card_number_container">
       
        <div class="card_form_close_icon">&#10006;</div>
        <div class="card_number_form">
            <form action="">
                <div>
                    <input type="text" style="margin-bottom: 0.5rem;" class="form-control" name="" id="" placeholder="Enter Card Number">
                    <a href="/card_login_otp_view" class="btn btn-info btn-block btn-sm">Submit</a>
                </div>
            </form>
        </div>

        <div class="form_overly"></div>
    </div>
</section>

<script>
  let imgs =   document.getElementsByClassName("d_c_s_img_col")[0].getElementsByTagName('img')

  for (let img of imgs) {
   
    img.addEventListener('click',handle_img);
}

function handle_img(event){
   
    main_img.src = event.target.src
}
let index = 1;

let d_c_s_img =   document.getElementsByClassName("d_c_s_img_col")[0].getElementsByClassName('d_c_s_img')

let page = Math.ceil(d_c_s_img.length / 5)

function next_btn(){
   let increment = index ++;
   
    if(increment >= page){
        index = page;
    }
    increment = index;
    change_action(increment)
 
}
 
 function prev_btn(){
    
   let increment = index--

 

    if(increment <= 1){
        index = 1;
    }
    increment = index
    change_action(increment)
    
 }

 function change_action(se = 1){
   
    for (let img of d_c_s_img) {
   img.classList.add('d-none')
}
console.log(index)

for (let i = se; i < se+5 ; i++) {
    d_c_s_img[i-1].classList.remove('d-none')
    
  
}

 }

 change_action()

 
</script>
 @endsection;