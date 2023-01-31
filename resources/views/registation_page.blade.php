@extends('master')

@section('content')


<div class="registation_boxes">



    <div class="registation_box_container">


    <div class="registation_box_col">
    <div class="registation_img_box">
    <img src="./assets/images/registation_box_img_1.jpeg" alt="">
    </div>

    <div class="btn_box_and_text_container">
    <div>
    <h3>Card Registration</h3>
    <p>If you are interested to bring our Privilege Card. Please click the registration button and provide your info.</p>
    <a class="btn btn-danger" href="{{url('pkaard_registration')}}">Registation</a>
    </div>
    </div>
    </div>


    </div>


    <div class="registation_box_container">


    <div class="registation_box_col">
    <div class="registation_img_box">
    <img src="./assets/images/registation_box_img_2.jpeg" alt="">
    </div>

    <div class="btn_box_and_text_container">
    <div>
    <h3>Franchise Partner</h3>
    <p>If you are interested to join with us as a Franchise Partner. Please click the registration button and share your info.</p>
    <a class="btn btn-danger  font-weight-bolder" href="">Registation</a>
    </div>
    </div>
    </div>


    </div>


    <div class="registation_box_container">


    <div class="registation_box_col">
    <div class="registation_img_box">
    <img src="./assets/images/registation_box_img_3.jpeg" alt="">
    </div>

    <div class="btn_box_and_text_container">
    <div>
    <h3>Affiliation Partner </h3>
    <p>If your are the concern of  any Company and Organisations this feature for you. Please click the registration button and provide the details.</p>
    <a class="btn btn-danger  font-weight-bolder" href="">Registation</a>
    </div>
    </div>

    </div>


    </div>

    </div>

        <div class="login_container">

            <div class="login_img">
                <img src="./assets/images/registation_box_img_4.jpeg" alt="">
            </div>

            <div class="login_box_text">
                <h3>Franchise Admin Panel </h3>
                <p>This feature only for our registered Franchise Partner. This feature not applicable for public user.</p>
                <a  class="btn btn-danger w-100 text-capitalize font-weight-bolder" href="">login</a>
            
            </div>
        
            
        </div>
   

@endsection;