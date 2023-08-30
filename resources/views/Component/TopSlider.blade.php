
<?php 
$data =  App\Http\Controllers\HomeController::all_slider_img();
//   dd($data['TopSlider']);
  ?>

  <section class="wrapper">
    <i class="fa-solid fa-arrow-left button" id="prev"></i>
    <div class="image-container">
      <div class="carousel-custom ">
        @foreach ($data['TopSlider'] as $key => $value)
        <img src="{{$value->img_path}}" alt="" />
         @endforeach 
      </div>
      <i class="fa-solid fa-arrow-right button" id="next"></i>
    </div>
  </section>
 
<style>

.top_slider_container {
    width: 100%;
    height: 22rem;
    overflow: hidden;
}

.image-container {
    height: 341px;
    max-width: 500px;
    width: 100%;
    overflow: hidden;
}

 /* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #343f4f;
}  */
.wrapper {
  display: flex;
  /* max-width: 650px; */
  width: 100%;
  /* height: 400px; */
  background: #fff;
  align-items: center;
  justify-content: center;
  position: relative;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.wrapper i.button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  height: 36px;
  width: 36px;
  background-color: #343f4f;
  border-radius: 50%;
  text-align: center;
  line-height: 36px;
  color: #fff;
  font-size: 15px;
  transition: all 0.3s linear;
  z-index: 100;
  cursor: pointer;
}
i.button:active {
  transform: scale(0.94) translateY(-50%);
}
i#prev {
  left: 25px;
}
i#next {
  right: 25px;
}
/* .image-container {
  height: 320px;
  max-width: 500px;
  width: 100%;
  overflow: hidden;
} */
.image-container .carousel-custom {
  display: flex;
  height: 100%;
  width: 100%;
  transition: all 0.4s ease;
}
.carousel-custom  img {
  height: 100%;
  width: 100%;
  border-radius: 18px;
  border: 10px solid #fff;
  object-fit: cover;
}


@media screen and (max-width: 572px){


.image-container {
    height: 319px;
    max-width: 468px;  
}

}
.wrapper i{
  z-index: 1 !important;
}


@media screen and (max-width: 400px){

  .image-container {
    height: 251px;
   
}
.top_slider_container {
  height: 16.2rem  !important;
}

}
</style>


<script>
  const wrapper = document.querySelector(".wrapper"),
  carousel = document.querySelector(".carousel-custom"),
  images = document.querySelectorAll("img"),
  buttons = document.querySelectorAll(".button");
let imageIndex = 1,
  intervalId;
// Define function to start automatic image slider
const autoSlide = () => {
  // Start the slideshow by calling slideImage() every 2 seconds
  intervalId = setInterval(() => slideImage(++imageIndex), 2000);
};
// Call autoSlide function on page load
autoSlide();
// A function that updates the carousel display to show the specified image
const slideImage = () => {
  // Calculate the updated image index
  imageIndex = imageIndex === images.length ? 0 : imageIndex < 0 ? images.length - 1 : imageIndex;
  // Update the carousel display to show the specified image
  carousel.style.transform = `translate(-${imageIndex * 100}%)`;
};
// A function that updates the carousel display to show the next or previous image
const updateClick = (e) => {
  // Stop the automatic slideshow
  clearInterval(intervalId);
  // Calculate the updated image index based on the button clicked
  imageIndex += e.target.id === "next" ? 1 : -1;
  slideImage(imageIndex);
  // Restart the automatic slideshow
  autoSlide();
};
// Add event listeners to the navigation buttons
buttons.forEach((button) => button.addEventListener("click", updateClick));
// Add mouseover event listener to wrapper element to stop auto sliding
wrapper.addEventListener("mouseover", () => clearInterval(intervalId));
// Add mouseleave event listener to wrapper element to start auto sliding again
wrapper.addEventListener("mouseleave", autoSlide);

</script>