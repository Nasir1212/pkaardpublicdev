@extends('master')

@section('content')
<style>
  .custom_bg_muted{
    background: #ddd;
    height: 5rem;
  }

  .custom_bg_secondery{
    background: #dee2e6;
  }

  caption{
    caption-side: top !important;
    text-align: center
  }

 
</style>

<section>
  <?php 
    
    
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$explode_uri = explode('/',$uri);

$explode_param = explode('-',$explode_uri[2]);

if($explode_param[0]=='p_id'){
 $prduct_status =  App\Http\Controllers\HomeController::product_info_one($explode_param[1]);
// print($prduct_status);
}else {
  #code ....
  $prduct_status =  App\Http\Controllers\HomeController::sub_product_info_one($explode_param[1]);

  // dd($prduct_status);
}
    
    ?>
  <div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-6 mb-5">
      <div class="d-flex flex-column">
        <div class="bg-warning p-2 text-muted chivo_mono">
        <h5 class="text-muted chivo_mono">Trageted info</h5>
        </div>
        <div class="p-2 custom_bg_muted mt-2">

          <h6><b class="text-muted">{{$prduct_status[0]->title}}</b> </h6>
          <h6>Discount : <b class="text-muted">{{$prduct_status[0]->privilege}}</b>%</h6>

        </div>
      </div>
    </div>


    <div class=" col-sm-12 col-md-12 col-lg-6 mb-5" >
      <div class="d-flex flex-column">
        <div class="bg-warning p-2 text-muted chivo_mono">
        <h5 class="text-muted chivo_mono">Terms & Condition </h5>
        </div>
        <div class="p-2 custom_bg_muted mt-2">
        <p style="text-align: justify; font-size:12px">
          SSLCOMMERZ enables rapid activation for transaction acceptance. With a minimum required documentation during its onboarding process is entirely online.
        </p>

        </div>
      </div>
    </div>

  
    <div class="col-12">
      <hr>
      <div class="row">
       
        <div class="col-sm-12 col-md-6 col-lg-6">
          <?php   
          if( is_numeric($prduct_status[0]->privilege) == true &&  is_numeric($prduct_status[0]->regular_price) == true):
            
          ?>
          <table class="table table-striped table-bordered table-hover">
         
            <caption class="chivo_mono">Product Amount </caption>
            <thead class="bg-warning">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Amount</th>
             
              </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Regular Price </td>
              <td>{{$prduct_status[0]->regular_price}} TK</td>
            </tr>
    
            <tr>
              <td>2</td>
              <td>Payable Price</td>
              <td>{{ $prduct_status[0]->regular_price - ($prduct_status[0]->regular_price * $prduct_status[0]->privilege/100 ) }} TK </td>
            </tr>
    
    
            <tr>
              <td>3</td>
              <td>Discount </td>
              <td>{{ $prduct_status[0]->regular_price * $prduct_status[0]->privilege/100  }} TK </td>
            </tr>
    
            <tr>
              <td>4</td>
              <td>Discount Percent </td>
              <td>{{$prduct_status[0]->privilege}} <i class="fa fa-percent" aria-hidden="true"></i>  </td>
            </tr>
    
          
           
            </tbody>
          
            
          </table>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
          <table class="table table-striped table-bordered table-hover">
            <caption class="chivo_mono">Pay to Pkaard</caption>
            <thead class="bg-warning">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Amount</th>
             
              </tr>
            </thead>
            <tbody>
           
            <tr>
              <td>1</td>
              <td> Pkaard Charge fee </td>
              <td><?php
              
            $payable =   $prduct_status[0]->regular_price - ($prduct_status[0]->regular_price * $prduct_status[0]->privilege/100 );
           $charge_fee =  $payable/100;

           echo $charge_fee ;
              ?>TK </td>
            </tr>
    
            <tr>
              <td>2</td>
              <td> VAT (15%) </td>
              <td><?php  $vat = $charge_fee*15/100;
              echo $vat;
              
              ?>TK </td>
    
            </tr>
    
            <tr>
              <td>3 </td>
              <td>Platform fee Fee</td>
              <td>3 TK </td>
            </tr>
           
            </tbody>
    
            <tfoot class=" custom_bg_secondery">
              <tr>
                <td></td>
                <td> <b>Grand Total</b></td>
                <td colspan="2"><b><?php echo  $charge_fee+$vat+3; ?> TK </b> </td>
               
                
              </tr>
            </tfoot>
           
          </table>
          <?php endif ?>
        </div>
      


      </div>
      @if(is_numeric($prduct_status[0]->privilege) == true &&  is_numeric($prduct_status[0]->regular_price) == true)
        <div class="m-2">
          <button class="btn btn-block custom_btn_warning_danger  d-flex justify-content-center chivo_mono">Confirm</button>
        </div>
      @endif
        @if($prduct_status[0]->regular_price== null)
      <div class="row">
        <div class="col-lg-6 col-sm-12 col-md-6 mb-1">
          <table class="table table-striped table-bordered table-hover">
            <caption class="chivo_mono">Notified</caption>
            <thead  class="bg-warning">
              <tr>
                <td>Keep mind</td>
              </tr>

            </thead>
            <tbody>
              <tr>
                <td style="text-align: justify">
                
                   It doesn't have any fixed regular price. It is dependent on the menu . Please  Save  This Dicount Promo code <b class="text-muted"> <?php echo strtoupper(substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 6)) ?></b> after confirmation. Appear discount Promo code on your targeted seller 
                
                </td>
              </tr>
         
        </tbody>
        </table>        
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6">
          <table class="table table-striped table-bordered table-hover">
            <caption class="chivo_mono">Pay to Pkaard</caption>
            <thead class="bg-warning">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Amount</th>
             
              </tr>
            </thead>
            <tbody>
           
           
    
            <tr>
              <td>1 </td>
              <td>Platform fee Fee</td>
              <td>3 TK </td>
            </tr>
           
            </tbody>
    
            <tfoot class=" custom_bg_secondery">
              <tr>
                <td></td>
                <td> <b>Grand Total</b></td>
                <td colspan="2"><b>3 TK </b> </td>
               
                
              </tr>
            </tfoot>
           
          </table>
        
        </div>
        <div class="col-sm-12  mb-5">
          <div style="display: flex;justify-content: center; margin-top: 1rem;">
            <button class="btn custom_btn_warning_danger w-100">Confirm</button>
          </div>
        </div>
       
      </div>
      @endif
    </div>

  </div>

</div>
</section>



 @endsection;