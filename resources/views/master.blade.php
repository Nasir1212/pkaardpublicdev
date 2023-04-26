<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pkaard</title>
    <link rel="icon"  type="image/x-icon" href="{{ asset('assets/images/favicon.ico')}}">
    
    <script src="{{asset('assets/js/bd_data.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('https://office.pkaard.com/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>

    {{-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Large.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Medium.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Small.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.toast.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Galada&family=Mina&family=Roboto:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bs-stepper/dist/css/bs-stepper.min.css">
    <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    <script src="{{asset('assets/js/SessionExport.js')}}"></script>
  
    
    
<style>
    del {
    text-decoration: line-through !important;
}

.chivo_mono{
    font-family: 'Chivo Mono', monospace;
}

.checked {
  color: orange;
}

.active_class{
    background: linear-gradient(-45deg, #dca9405c, #ef65195e);
}


</style>

</head>
<body>

    <script>
        window.onload = function(){
            fetch(`${location.origin}/index`)
            .then(response => response.text())
            .then(data => {
                console.log(data);
            })
       
        }
    </script>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <header >
              

                <section class="header_middle d-flex justify-content-between p-2">

                    <div class="logo_section">
                        <a href="{{url('/')}}"><img src=" {{asset('./assets/images/pkaard_logo.jpeg')}}" title="" alt="" class="img-responsive"></a>
                    </div>
                    <div class="header_contact_section">
                        <div class="d-flex">
                            <div class="calle_logo" style="font-size: 2rem;">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="contact_no">
                                <p class="mb-0">Call Us</p>
                                <p class="mb-0">096-77-888-222</p>

                            </div>
                        </div>

                    </div>

                    <div class="header_search_section">
                        <div class="header_search_bar">
                            <input style="border: none;outline: none;width: 18rem;padding-left: 0.7rem" type="text" placeholder="Search entire store here ..." name="" id="">
              

                            <span class="btn btn-warning search_btn"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></span>
                        </div>

                    </div>
                
                  <div class="pkaard_register_btn">
                      <a class="btn btn-warning" href="{{url('registation_page')}}">Pkaard Registration </a>
                  </div>
                </section>

                
                <section class="nav_bottom_section d-flex justify-content-between">
                    
                    <!--Navigation menu-->
                    <ul class="d-flex justify-content-around align-items-center w-100" style="height: 2rem ">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>

                        <li>
                            <a href="">Gallery</a>
                        </li>
                         <li>
                            <a href="">Our Team</a>
                        </li>
                         <li>
                            <a href="">News</a>
                        </li>
                         <li>
                            <a href="">Carrier</a>
                        </li>
                         <li>
                            <a href="{{url('about_us')}}">About Us</a>
                        </li>
                        <li>                           
                            <a href="">Contact Us</a>
                        </li>
                    </ul>
               
                </section>

                <section class="mobile_nav_icon">
                    <div class="sub_nav_icon"><i class="fa-solid fa-bars-staggered"></i></div>
                    <div class="main_nav_icon"><i class="fa-sharp fa-solid fa-bars"></i></div>
                </section>

                </header>



               <div class="dual_section_sub_navitaion_and_main_section_countainer">
                <div class="sub_navigation">
                   <div style="border: 1px solid #0000001f;" class="sub_navigation_container" >
                      
                    @php
                    $data = App\Http\Controllers\HomeController::all_category();
                    @endphp

                   
                    <ul>
                        
                    @foreach($data as $d)
                    <li  class="<?php if(isset($_GET['c']) &&  $_GET['c']  == $d->id){
                        echo "active_class";
                    }
                    
                   
                   ?>"><a href="/product_view?c={{$d->id}}&d=0">{{$d->category_name}}</a></li>
                    @endforeach

                    </ul>
                   </div>
                </div>

                <div class="main_section">
                    <main>
                    {{-- laravel content  --}}

                    @yield('content')
    
                    </main>
                </div>
               </div> 

               

                <footer style="background: #253237">
                    <div class="footer_section" >
                        <div class="">
                            <div class="col-6"></div>
                            <div class="col-6 mb-3">
                                <img src="{{asset('./assets/images/pkaard_logo.jpeg')}}" class="footer_logo" alt="">
                            </div>
                            <div class="col-12 mb-4 ">
                                <p style="color: #888888;font-size: 15px;font-weight: 500;text-align: justify;">We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="social_midea">
                                    <div class="social">
                                        <a href="https://web.facebook.com/Pkaard2022" class="facebook" target="_blank" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                        {{-- <a href="#" target="_blank" class="twitter" title="Twitter"><i class="fa-brands fa-twitter"></i></a> --}}
                                        <a href="https://www.m.me/Pkaard2022" target="_blank" class="messanger" title="Messanger"><i class="fa-brands fa-facebook-messenger"></i></a>

                                      
                                        <a href="https://instagram.com/pkaard2022?igshid=ZDdkNTZiNTM=" target="_blank" class="instagram" title="Instagram"><i class="fa-brands fa-square-instagram"></i></i></a>
                                        <a href="https://www.linkedin.com/company/pkaard/" target="_blank" class="linkedin" title="Linkedin"><i class="fa-brands fa-linkedin"></i></a>
                                        </div>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="help_section d-flex justify-content-around" style="width: 10rem;">
                                    <div class="helping_logo">
                                        <img src="{{asset('./assets/images/icon_footer_phone.png')}}"  alt="">
                                    </div>
                                    <div class="text_section">
                                        <label class="text-uppercase text-white mb-0 font-weight-bolder" >need help ?</label>
                                        <p class="text-white mb-0">096-77-888-222</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="information_section text-white">
                                <h4 class="text-uppercase font-weight-bolder text-white">Information</h4>
                                <div class="info_link">

                                    <ul>
                                        <li><a class="text-white" href="{{url('about_us')}}">About Us</a></li>
                                        <li><a class="text-white" href="">Privacy Policy</a></li>
                                        <li><a class="text-white" href="">Delivery Information</a></li>
                                        <li><a class="text-white" href="">Terms & Conditions</a></li>
                                        <li><a class="text-white" href="">Contact Us</a></li>
                                        <li><a class="text-white" href="">Returns</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="customer_service text-white">
                                <h4 class="text-uppercase font-weight-bolder text-white">Customer Service</h4>
                                <div class="info_link">

                                    <ul>
                                        <li><a class="text-white" href="">Site Map</a></li>
                                        <li><a class="text-white" href="">Wish List</a></li>
                                        <li><a class="text-white" href="">Brands</a></li>
                                        <li><a class="text-white" href="">Gift Certificates</a></li>
                                        <li><a class="text-white" href="">Affiliate</a></li>
                                        <li><a class="text-white" href="">Specials</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                       <div class="">
                            <div class="customer_service text-white">
                                <h4 class="text-uppercase font-weight-bolder text-white">JOIN OUR NEWSLETTER</h4>
                                <div class="news_letter">

                                   <div>
                                    <p style="color: #888888;font-size: 15px;font-weight: 500;text-align: justify;">Sign up for our e-mail to get latest news.</p>
                                    <div class="subscribe_section">
                                        <div>
                                            <input style="border: none;outline: none;" type="text" placeholder="Please enter your email" name="" id="">
                                            
                
                                            <button class="btn btn-warning " style="border-radius: 0px;">
                                                Subscribe
                                            </button>
                                        </div>
                
                                    </div>
                                   </div>

                                </div>
                            </div>
                        </div>
                       
                    </div>

                    <div class="copy_right">
                        <p class="mb-0">@2022, Pkaard, All Rights Reserved</p>
                    </div>

                </footer>
            </div>
        </div>
        
    </div>

    {{-- <script src="{{asset('assets/js/Jquery.min.js')}}"></script> --}}
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
    <script src="{{asset('assets/js/fontawsome.js')}}"></script> 
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script> 
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> 
    <script src="{{asset('assets/js/index.js')}}"></script> 
    <script src="{{asset('assets/js/jquery.toast.js')}}"></script> 

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}


<script type="text/javascript">

// let scriptElement = document.createElement("script");
// scriptElement.type = "text/javascript";
// scriptElement.src = "JSfile.js";
// document.body.appendChild(scriptElement);
  
// document.addEventListener("contextmenu", (e) => {
//  e.preventDefault();
// }, false);

// document.addEventListener("keydown", (e) => {
//  if (e.ctrlKey || e.keyCode==123) {
//   e.stopPropagation();
//   e.preventDefault();
//  }
// });



    </script>
    
</body>
</html>