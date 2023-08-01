@extends('master')

@section('content')
<style>

    
@media screen and (max-width: 400px) {
.subscribe_section input{
    padding-left: 0rem !important;
}

.subscribe_section button{
    width: 36% !important;
}

.customer_blance {
    width: 38% !important;;
}

.customer_blance_container {
    width: 10rem !important;
    margin: 0rem 3px !important;
}

.history_btn_container {
    gap: 1px !important;
 
}
}
    
.custom_bg {
    background: linear-gradient(10deg, tomato,#ffff0069);

    animation-name: card_bg_animate;
    animation-duration: 6s;
    animation-delay: 1ms;
    animation-iteration-count: infinite;

}

.custom_font_styling{

}

.Roboto_Condensed{
    font-family: 'Roboto Condensed', sans-serif;
}

/* @keyframes card_bg_animate{

    0%{ background: linear-gradient(10deg, tomato,#ffff0069);}
    10%{ background: linear-gradient(18deg, tomato,#ffff0069);}
    20%{ background: linear-gradient(36deg, tomato,#ffff0069);}
    30%{ background: linear-gradient(54deg, tomato,#ffff0069);}
    40%{ background: linear-gradient(72deg, tomato,#ffff0069);}
    50%{ background: linear-gradient(90deg, tomato,#ffff0069);}
    60%{ background: linear-gradient(108deg, tomato,#ffff0069);}
    70%{ background: linear-gradient(126deg, tomato,#ffff0069);}
    80%{ background: linear-gradient(144deg, tomato,#ffff0069);}
    90%{ background: linear-gradient(162deg, tomato,#ffff0069);}
    100%{ background: linear-gradient(180deg, tomato,#ffff0069);}

} */

.bg_tomato{
    background: tomato !important;
}
.customer_profile_table td {
    font-weight: bold;
    color: #252424;
    font-family: 'Roboto Condensed';
}

.customer_blance_container {
    width: 13rem;
    margin: 0rem 1rem;
}

.customer_blance {
    width: 50%;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    color: grey;
    border: 1px solid grey;
}

.history_btn_container {
    display: grid;
    grid-template-columns: auto auto auto;
    gap: 1rem;
    height: 3rem;
}

.card.custom_bg {
    height: 3rem;
    cursor: pointer
}

.custom_font_styling {
    margin: 0rem -1rem;
}
h5.Roboto_Condensed {
    font-size: 14px;
}

.custom_font_styling b{
    font-size: 14px;
}

caption {
   
  
    text-align: center !important;
    caption-side: top !important;
}


</style>

<section class="mt-5">
    <div class="d-flex justify-content-end " >
        <button class="btn btn-sm btn-danger bg_tomato ">Personal info</button>

        <div class="customer_blance_container d-flex justify-content-between">
            <div class="customer_blance" id="my_wallet"></div>
            <button class="btn btn-success">Recharge</button>
        </div>
    </div>
<hr/>
   <div class="row ">
    <div class="col-sm-12 col-md-6 col-lg-6 ">
        <div class="history_btn_container mb-3">
        <div class="card custom_bg">
            <div class="card-body">
               <div class="custom_font_styling d-flex  justify-content-between"> <h5 class="Roboto_Condensed"><i class="fa fa-shopping-basket text-white"></i> Purchase</h5> 
                <b class="Roboto_Condensed">8</b>
            </div>
            </div>  
      
    </div>

        <div class="card custom_bg">
            <div class="card-body">
               <div  class="custom_font_styling  d-flex  justify-content-between"> <h5 class="Roboto_Condensed"><i class="fa fa-thumbs-up text-white"></i>Favarite</h5>
                <b class="Roboto_Condensed">10</b>
            </div>
            </div>
    </div>

        <div class="card custom_bg">
            <div class="card-body">
               <div  class="custom_font_styling  d-flex  justify-content-between ">  <h5 class="Roboto_Condensed"5><i class="fa fa-paw text-white"></i>Points</h5>
                <b class="Roboto_Condensed">200</b>
            </div>
            </div>
    </div>
</div>

<table class="table  customer_profile_table">
    <caption>Purchase</caption>
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Promo Code </th>
            <th>Discribe </th>

        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>HG2K1B </td>
            <td>430</td>
        </tr>

       

    </tbody>
</table>
    </div>

  
    <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
        <table class="table  table-striped customer_profile_table">
            <caption>Other history</caption>
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Discribe </th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Total Discount(yearly) </td>
                    <td>430</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Total Discount(monthly) </td>
                    <td>436</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Total usage </td>
                    <td>436</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Total Payment </td>
                    <td>436</td>
                </tr>

            </tbody>
        </table>
    </div>
 

   </div>

</section>


<script>
    try {

        

async function load_blance (){
    
    let LocalStorage = SessionExport.getLocalStorage();
    const response = await fetch(`${location.origin}/card_holder_wallet/${LocalStorage['card_id']}`);

        const result = await response.json();
        console.log(result)
        if(result['condition'] != false){
            document.getElementById("my_wallet").innerText =`${result[0]['wallet']} tk`;
        }else{
            document.getElementById("my_wallet").innerText =`0.00 tk`;

        }
       
}
load_blance();  
    } catch (error) {
        console.log(error)
    }


   
</script>

 @endsection;