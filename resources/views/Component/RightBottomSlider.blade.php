<?php 
$data =  App\Http\Controllers\HomeController::all_slider_img();
//   dd($data['TopSlider']);
  ?>

<div class="bottom_left_slider_container  botto_slider">
    <!-- <div class="slider_col  bottom_left_slider_col">
            <img src="./assets/images/sliding_to_bottom_left_2.jpeg" alt="">
        </div>

        <div class="slider_col  bottom_left_slider_col">
            <img src="./assets/images/sliding_to_bottom_left_1.jpeg" alt="">
        </div>
        -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($data['bottomRightSlider'] as $key => $value)
                <!-- Single item -->
                <div class="carousel-item {{$key==0 ? "active":''}} ">
                    <img class="d-block w-100" src="{{$value->img_path}} " alt="Second slide">
                </div>
                @endforeach
             
            
            </div>
        </div>
            
        
    </div>
<script>
   
</script>