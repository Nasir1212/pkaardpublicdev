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

.d_c_s_img_col img{
    width: 100%;
}
.d_c_s_img{
    margin: 0.5rem;
    opacity: 0.6;
    cursor: pointer;
}
.d_c_s_img:hover{
    opacity: 1;
}

.round {
  border-radius: 50%;
  font-size: 1.2rem
}
.prev_next_btn{
    display: inline-block;
    padding: 8px 16px;
    background-color: #f1f1f1;
    color: black;
    cursor: pointer;
   
}
.prev_next_btn:hover {
  background-color: #ddd;
  color: black;
}
.prev_next_btn_container{
  width: 90%;

}

.prev_next_btn_container {
	width: 100%;
	margin: 0 auto;
	position: absolute;
	top: 68px;
}

</style>
<section>
    <div>
        <div class="d_c_s_content_image_container">
            <div class="d_c_s_img_container">
                <img src="https://pkaard.com/assets/images/entertainment.jpeg" alt="">
            </div>
            <hr>
            <div style="position: relative">
          
            <div class="d_c_s_img_col d-flex">

                <div class="d_c_s_img">
                    <img src="https://pkaard.com/assets/images/entertainment.jpeg" alt="">
                </div>

                <div class="d_c_s_img">
                    <img src="https://pkaard.com/assets/images/entertainment.jpeg" alt="">
                </div>

                <div class="d_c_s_img">
                    <img src="https://pkaard.com/assets/images/entertainment.jpeg" alt="">
                </div>

                <div class="d_c_s_img">
                    <img src="https://pkaard.com/assets/images/entertainment.jpeg" alt="">
                </div>

                <div class="d_c_s_img">
                    <img src="https://pkaard.com/assets/images/entertainment.jpeg" alt="">
                </div>

                      
            </div>

            <div class="prev_next_btn_container d-flex justify-content-between ">
                <div class="round prev_next_btn">&#8249;</div>
                <div class="round prev_next_btn">&#8250;</div>
            </div>
            </div>

            <div class="discription_box"></div>
        </div>
    </div>
</section>

 @endsection;