@extends('master')

@section('content')
<style>
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

@keyframes card_bg_animate{

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

}

.bg_tomato{
    background: tomato !important;
}
.customer_profile_table td {
    font-weight: bold;
    color: #252424;
    font-family: 'Roboto Condensed';
}
</style>

<section class="mt-5">
    <div class="d-flex justify-content-end " >
        <button class="btn btn-sm btn-danger bg_tomato ">Personal info</button>
    </div>
<hr/>
   <div class="row ">
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2">
        <div class="card custom_bg">
            <div class="card-body">
               <div class="custom_font_styling d-flex  justify-content-between"> <h5 class="Roboto_Condensed"><i class="fa fa-shopping-basket text-white"></i> My Purchase</h5> 
                <b class="Roboto_Condensed">8</b>
            </div>
            </div>  
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4 mb-2">
        <div class="card custom_bg">
            <div class="card-body">
               <div  class="custom_font_styling  d-flex  justify-content-between"> <h5 class="Roboto_Condensed"><i class="fa fa-thumbs-up text-white"></i> My Favarite</h5>
                <b class="Roboto_Condensed">10</b>
            </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4 mb-2">
        <div class="card custom_bg">
            <div class="card-body">
               <div  class="custom_font_styling  d-flex  justify-content-between ">  <h5 class="Roboto_Condensed"5><i class="fa fa-paw text-white"></i> Earning Points</h5>
                <b class="Roboto_Condensed">200</b>
            </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 mb-2">
        <table class="table  table-striped customer_profile_table">
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


 @endsection;