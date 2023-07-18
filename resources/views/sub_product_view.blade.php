@extends('master')

@section('content')
<style>

.product_img{
    height: 17rem;
    overflow: hidden;
}
/* 
.p_tag p {
  margin: 4.5px 0px;
} */

@media screen and (max-width: 455px){
    .product_img{
    height: 12rem;
    
}


 
}
@media screen and (max-width: 576px){
    .custom_mb_sm {
	margin-bottom: 1rem !important;
}

}


</style>
<section>
    <div class="top_component">
        <div class="row">
           
            <div class="ml-2 col-sm-12 col-md-6 col-lg-6">
                <div> <h5>
                    @if(count($data) >0)
                    {{$data[0]->store_name}}
                    @endif
                
                </h5></div>
            </div>
            
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div> <b>Total  :{{count($data)}} </b>  <span id="show_total_post"></span></div>
            </div>

        </div>
    </div>
    <div class="product_containainer" id="product_card_container">


 @foreach($data as $d)

 <?php    $suggested_img_path_array = explode(",",$d->img_path);?>

 <?php
            $privilege_info =is_numeric($d->privilege) == true? "<p><b class='text-muted'>Discount : </b> $d->privilege %</p>":"<p><b class='text-muted'>Privilege : </b>".strtoupper($d->privilege)."</p>";


 ?>
 <div class="card mb-4 p_tag">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <div class="product_img mb-sm-5 custom_mb_sm ">
                    {{-- <img src="${img_src == ''?'https://t4.ftcdn.net/jpg/04/99/93/31/360_F_499933117_ZAUBfv3P1HEOsZDrnkbNCt4jc3AodArl.jpg':`https://img.pkaard.com/images/${img_src[0]}`}" alt="Pkaard">
                 --}}

                
                 <img src="<?php 
                 if($suggested_img_path_array[0] == null || $suggested_img_path_array[0] ==""){
                   echo "https://t4.ftcdn.net/jpg/04/99/93/31/360_F_499933117_ZAUBfv3P1HEOsZDrnkbNCt4jc3AodArl.jpg";
                 }else{
                    echo "https://img.pkaard.com/images/".$suggested_img_path_array[0];
                 }
                 ?>" />
                </div>
                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 >  {{$d->title}}</h5>
               
                <div>
                    <p> <i class="fa fa-map-marker" style="font-size:25px"></i>{{$d->affiliation_product_address}} </p>
                    {{-- <p><b class="text-muted" >District</b> {{$d->district_name}}</p> --}}
                </div>

                <div>
                                    
                  <?php echo $privilege_info?>
                    <p><b class="text-muted">Regular Prize : </b> {{$d->regular_price}} TK</p>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <a class="btn btn-sm btn-warning btn-block" onclick="is_card_login('purchase_details/{{$d->id}}"  >Get Discount</a>
                     
                    </div>
                    <div class="col-6">
                        <a class="btn btn-sm btn-info btn-block" href="/sub_product_details_view/{{$d->id}}">See More &#8250;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
   

   @endforeach


    </div>
</section>



<?php




?>
<script>


</script>
 @endsection;