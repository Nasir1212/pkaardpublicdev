<style>
    
.flip-box {
  background-color: transparent;
  /* width: 300px;
  height: 200px; */
  /* border-right: 1px solid #f1f1f1; */
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.x:hover .flip-box-inner {
  transform: rotateX(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #f3f6f5;
  color: black;
}

.flip-box-back {
  background-color: #ffcec6;
  color: white;
  transform: rotateX(180deg);
}


 .y_axis {
  transform: rotateY(180deg) !important;
}


.y:hover .flip-box-inner {
  transform: rotateY(180deg);
}



.c_h2{
    font-weight: bold; 
    font-size: 24px;  
    text-align: justify;
}
.c_h1 {
    font-weight: bold;
    font-size: 21px;
    color: gray;
    text-align: justify;
}

    .c_grid{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    width: 100%;
    height: 10rem;
    }

    .img_box{
    width: 8rem; 
    height: 7rem;

    }

@media screen and (max-width: 1024px){
    .img_box {
    width: 5rem;
    height: 5rem;
}

.c_h1 {
  
    font-size: 15px;
    margin: 3px 0px;
}

.c_h2 {
    font-size: 20px;
}
.c_grid {
  
    height: 12rem;
}
}

@media screen and (max-width: 425px){
    .c_grid{
  
    grid-template-columns: repeat(1,1fr);
    height: 30rem;
    padding: 1rem 0rem;
    gap: 0.2rem;
   
}
.flip-box{
    box-shadow: 0px 2px 16px 0px rgba(0,0,0,.1);

}
}

</style>
<div class="container-fluid box_shadow_save_mondy">
    <div class=" c_grid justify-content-between">
        <div class="flip-box x">
            <div class="flip-box-inner">
              <div class="flip-box-front bg-white d-flex justify-content-center align-items-center">
                <div>
                <div class="d-flex flex_gap">
                    <img class="img_box"  src="https://www.svgrepo.com/show/5174/credit-card.svg" alt="">
                <div style="width: 9rem">
                    <h2 class="c_h2">Card Holder</h2>
                    <h1 class="c_h1">50,000+</h1>
                    <button class="btn btn-sm btn-danger text-start" style="margin-left: -25px; fill: rgb(255, 255, 255);">Explore more <svg style="width: 1rem;height:1rem" viewBox="0 0 16 16" class="svg-wrapper--8ky9e"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 1 0 8 0zM6.467 12l-.934-.933L8.6 8 5.533 4.933 6.467 4l4 4-4 4z" fill-rule="evenodd"></path></svg> </button>
                </div>
                </div>
                </div>
              </div>
              <div class="flip-box-back bg-warning">
             
              <p style="font-size: 0.9rem;" class="text-muted text-justify p-3 font-weight-bold">A leading and advertising marketplace founded in 2022. We have around 50,000+ customers based in all over Bangladesh. We are dedicated to providing the best privilege services in Platform Ek Subidha Onk.</p>
              </div>
            </div>
          </div>
         
          
        
          <div class="flip-box y">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <div class="flip-box-front bg-white d-flex justify-content-center align-items-center">
                    <div>
                        <div class="d-flex flex_gap">
                            <img  class="img_box"   src=" https://www.svgrepo.com/show/192222/teamwork.svg" alt="">
                        <div style="width: 9rem">
                            <h2 class="c_h2">Affiliation</h2>
                            <h1 class="c_h1">200+</h1>
                            <button class="btn btn-sm btn-danger text-start" style="margin-left: -25px; fill: rgb(255, 255, 255);">Explore more <svg style="width: 1rem;height:1rem" viewBox="0 0 16 16" class="svg-wrapper--8ky9e"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 1 0 8 0zM6.467 12l-.934-.933L8.6 8 5.533 4.933 6.467 4l4 4-4 4z" fill-rule="evenodd"></path></svg> </button>

                        </div>
                        </div>
                        </div>
                  </div>
              </div>
              <div class="flip-box-back bg-warning y_axis">
              
               <p style="font-size: 0.9rem;" class="text-muted text-justify p-3 font-weight-bold">Across Bangladesh, we have approximately 200+  affiliate partners. All the privileges and benefits provided by our partners will be available to you. </p>
              </div>
            </div>
        </div>

        <div class="flip-box x">
        <div class="flip-box-inner">
            <div class="flip-box-front">
            <div class="flip-box-front bg-white d-flex justify-content-center align-items-center">
                <div>
                    <div class="d-flex flex_gap">
                        <img  class="img_box"   src="https://www.svgrepo.com/show/192203/teamwork.svg" alt="">
                    <div style="width: 9rem">
                        <h2 class="c_h2">Franchise </h2>
                        <h1 class="c_h1">15+</h1>
                        <button class="btn btn-sm btn-danger text-start" style="margin-left: -25px; fill: rgb(255, 255, 255);">Explore more <svg style="width: 1rem;height:1rem" viewBox="0 0 16 16" class="svg-wrapper--8ky9e"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 1 0 8 0zM6.467 12l-.934-.933L8.6 8 5.533 4.933 6.467 4l4 4-4 4z" fill-rule="evenodd"></path></svg> </button>

                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="flip-box-back bg-warning">
          
            <p style="font-size: 0.9rem;" class="text-muted text-justify p-3 font-weight-bold">We have around 15+ franchises in all over Bangladesh. We aim to cover the 64th district and strive to give our customers the most privileges, the best selection, and the utmost convenience.</p>

            </div>
        </div>
        </div>

    
         
    </div>
</div>

  