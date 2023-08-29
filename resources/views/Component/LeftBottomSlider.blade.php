<?php 
$data =  App\Http\Controllers\HomeController::all_slider_img();
//   dd($data['TopSlider']);
  ?>

<div class="botto_right_slider_container botto_slider">

    @foreach ($data['bottomLeftSlider'] as $key => $value)
    <div class="slider_col bottom_right_slider_col">
        <img src="{{$value->img_path}}" alt="">
    </div>
    @endforeach
    <div class="slider_col bottom_right_slider_col">
        <img src="./assets/images/sliding_to_bottom_right_2.jpeg" alt="">
    </div>        
</div>