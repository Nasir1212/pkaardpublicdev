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

.discription_box ol li{
    list-style-type: decimal;
}

.suggest_product_img {
	width: 13.8rem;
	height: 7rem;
	margin: 0 auto;
}


.suggest_product_col {
	border: 1px solid #ddd;
	padding: 0.5rem;
	overflow: hidden;
}

.suggest_product_container {
	display: grid;
	grid-template-columns: repeat(4,1fr);
	gap: 0.5rem;
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

.suggest_product_container {	
grid-template-columns: repeat(2,1fr);
}

.suggest_product_col {
	font-size: 0.8123rem;
}

.suggest_heading {
	font-size: 1.22rem;
}

}


</style>
<section class="">
   
    <?php
if(!empty($all_rating)){

    $max = 0;
   
    foreach( $all_rating as $rat ){
        $max = $max + $rat->rating;
       
    }
    $avg_rating = $max/count($all_rating);
 
}
   $img_path_array = explode(",",$product_data[0]->img_path);
   
 ?>
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
               @if(!empty($all_rating)):
                @for($i = 0; $i < intval($avg_rating); $i++)
                <span class="fa fa-star checked" aria-hidden="true"></span> 
                @endfor
                @if(is_float($avg_rating)==1)
                <span class="fa fa-star-half-o checked" aria-hidden="true"></span> 
                @endif
               @endif
                <p><b class="text-muted">Category :- </b>  <i> {{$product_data[0]->category_name}}</i></p>
            </div>
            <div class="localtion_box">
                <p><b class="text-muted">District :-  </b>  {{$product_data[0]->district_name}} </p>
                <p><b class="text-muted">Location :- </b>  <i>  {{$product_data[0]->address }}</i> </p>
                
            </div>
            <div class="prize_box">
                <p><b class="text-muted">Prize :- </b>  {{$product_data[0]->regular_price }} TK</p>
              <?php $privilege =   is_numeric($product_data[0]->privilege) ==true ?"<p><b class='text-muted'>Discount :- </b> ". $product_data[0]->privilege."% </p>":"<p><b class='text-muted'>Privilege :- </b> ".  $product_data[0]->privilege." </p>" ?>
            

                <?php echo "$privilege " ?>
            </div>

           <hr>
            <div class="discription_box" id="discription_box">
               
                
                <?php
                $description = $product_data[0]->details;
                echo "$description "  ?>
               
            </div>
            <div class="discount_btn">
                <a class="btn custom_btn_warning_danger btn-block  chivo_mono" onclick="is_card_login('purchase_details/{{$product_data[0]->id }}')">Get Discount</a>
            </div>
            <br>

        </div>
        </div>
    </div>
</section>

<?php $data =  App\Http\Controllers\HomeController::suggested_product($product_data[0]->category_id); ?>

<?php $rating_comment =  App\Http\Controllers\HomeController::get_product_coment_and_rating($product_data[0]->id); ?>

{{-- @dd($all_rating) --}}


{{-- @dd($data); --}}
<!--Suggest Product Section -->
<section class="suggest_product_section">
    <div>
        <h4 class="text-muted chivo_mono suggest_heading">We have suggested for you </h4>
    </div>
    <div class="suggest_product_container">

        @foreach($data as $d)
<?php    $suggested_img_path_array = explode(",",$d->img_path);?>
<?php $privilege =   is_numeric($d->privilege) ==true ?"<p><b class='text-muted'>Discount :- </b> ". $d->privilege."% </p>":"<p><b class='text-muted'>Privilege :- </b> ".  $d->privilege." </p>" ?>

        <a class="suggest_product_col" href="/product_details_view/{{$d->id}}">
            <div class="suggest_product_img">
                <img src="https://img.pkaard.com/images/{{$suggested_img_path_array[0]}}" alt="Pkaard Image">
            </div>

            <div class="product_info_container">
                <div>{{$d->title}}</div>
                <div><b>Regular Price</b>{{$d->regular_price}} TK </div>
                <div>  <?php echo "$privilege " ?></div>
            </div>
        </a>
    
    @endforeach

      


    </div>
</section>
<!--Suggest Product Section /-->
<br>

<section class="customer_reviews_rating_section">
    @if(count($rating_comment) >0)
    <div>
        <h4 class="text-muted chivo_mono suggest_heading"> Customers Reviews and Ratings </h4>
       
    </div>
    <div class="customer_reviews_rating_container">
        @foreach($rating_comment as $rc)
        <hr>
        <div class="customer_reviews_rating_col mb-3">
            <div class="mb-2">
              <span> <h4 class="d-inline lead {{$rc->card_id}}" > {{is_null($rc->user_name)?"No Name":$rc->user_name}}</h4></span>
              <sup><s> <span class="text-muted">  {{ date("d M Y" ,strtotime($rc->date))}}</span> </s></sup>
            </div>
            
            <div class="mb-3">
              
                @for($i = 0; $i < $rc->rating; $i++)
                <span class="fa fa-star checked" aria-hidden="true"></span> 
                @endfor

                @for($i = 0; $i < 5 - $rc->rating; $i++)
                <span class="fa fa-star-o" aria-hidden="true"></span> 
                @endfor
                
            </div>

            <div class="comment">
                <p class="text-justify"> {{$rc->comment}} </p>
            </div>


        </div>
   
        @endforeach
    </div>
    @endif
    <div>
      
        <button type="button" class="btn btn-info btn-sm mb-5 float-right" id="{{$product_data[0]->id}}" onclick="is_card_login('reviews_reating_push_view',{product_id:{{$product_data[0]->id}}})" > Push Reviews & Reating</button>
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
   try {
    
  
    for (let img of d_c_s_img) {
   img.classList.add('d-none')
}
console.log(index)

for (let i = se; i < se+5 ; i++) {
    d_c_s_img[i-1].classList.remove('d-none')
    
}
}catch (error) {
    
}


 }

 change_action()


// console.log(document.getElementById(SessionExport.getLocalStorage()['card_id']))

try {
  if(SessionExport.getLocalStorage()){

for (const Elem  of document.getElementsByClassName(SessionExport.getLocalStorage()['card_id'])) {
    Elem.innerHTML = "<b class='text-info'>Your Review</b>";
} 
  }
} catch (error) {
   console.log(error) 
}


</script>
 @endsection;