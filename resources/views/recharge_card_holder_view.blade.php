@extends('master')

@section('content')

<style>
    .mfs_logo{
        width: 2.5rem;
        height: 2.5rem;
    }

    .mfs_col h1 {
    font-size: 15px;
}

.mfs_container {
    display: grid;
    grid-template-columns: repeat(4,1fr);
    width: 60%;
    margin: auto;
}
.mfs_col {
    text-align: center;
    border: 1px solid #ddd;
    background: white;
    padding-top: 6px;
    margin: 2px;
    cursor: pointer;
}

@media screen and (max-width: 455px){
   
    .mfs_container {
  
    width: 95%;
 
}
   
}

.modal_img{
    width: 4rem;
    height: 4rem
}

</style>

<section class="mt-5">
    <div class="mfs_container mb-5">

        <div class="mfs_col">
            <img class="mfs_logo" src="https://freelogopng.com/images/all_img/1656234745bkash-app-logo-png.png" alt="">
            <h1 title="Bkash">Bkash</h1>
        </div>

        <div class="mfs_col">
            <img class="mfs_logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL-F326FC1cxo21SrXSXb4igg3UoTb6PQcOSUIWs4&s" alt="">
            <h1 title="Nagad">Nagad</h1>
        </div>

        <div class="mfs_col">
            <img class="mfs_logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrJfpvfXOSLozF6o8A91ickn2JTWmpHcgHa0lsHerr&s" alt="">
            <h1 title="Rocket">Rocket</h1>
        </div>

        <div class="mfs_col">
            <img class="mfs_logo" src="https://play-lh.googleusercontent.com/Vfshn6wtfUF-Ugo96Jy4o_3T-UrsQL4v4z_doqABVf4h4pgldF_xFzKg-OSy2fgobSXx" alt="">
            <h1 title="SSLCOMMERZ ">SSL</h1>
        </div>

        

    </div>

</section>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <div class=" d-flex justify-content-center align-items-center flex-column">
            <div class="mb-2">
                <img class="modal_img" src="" alt="">
                <h1 class="modal_title" style="font-size: 1.2rem ; text-align:center">SSL</h1>
            </div>
            <input class="form-control w-50 mb-1" type="text" placeholder="Enter amout">
            <button class="btn btn-sm btn-success w-50  btn-block font-weight-bold">Recharge</button>
         </div>
        </div>
       
      </div>
    </div>
  </div>
<script>

debugger;
    let mfs_col = document.getElementsByClassName("mfs_col");

    for (const elem of mfs_col) {
        elem.addEventListener('click',function(){
            console.log(this.children[0].src)

            $("#exampleModal").modal("show")
       document.getElementsByClassName("modal_img")[0].src= this.children[0].src;
       document.getElementsByClassName("modal_title")[0].innerText= this.children[1].title;

        })
    }
    try {

        

async function load_blance (){
    
    let LocalStorage = SessionExport.getLocalStorage();
    const response1 = await fetch(`${location.origin}/card_holder_wallet/${LocalStorage['card_id']}`);
    const response2 = await fetch(`${location.origin}/show_order/${LocalStorage['card_id']}`);
let RequestPromise = await Promise.all([response1,response2])

let card_holder_wallet = await RequestPromise[0].json();
let show_order = await RequestPromise[1].json();

       
}
// load_blance();  
    } catch (error) {
        console.log(error)
    }


   
</script>

 @endsection;