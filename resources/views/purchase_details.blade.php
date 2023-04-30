@extends('master')

@section('content')
<style>
  .custom_bg_muted{
    background: #ddd;
    height: 5rem;
  }
</style>

<section>
  <div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-6 mb-5">
      <div class="d-flex flex-column">
        <div class="bg-warning p-2 text-muted chivo_mono">
        <h5 class="text-muted chivo_mono">Payment info</h5>
        </div>
        <div class="p-2 custom_bg_muted mt-2">
          <h6>Card No : <b class="text-muted">1509002300000077</b> </h6>
          <h6>Payment Method : <b class="text-muted">SSLCOMMERZ </b></h6>

        </div>
      </div>
    </div>


    <div class=" col-sm-12 col-md-12 col-lg-6 mb-5" >
      <div class="d-flex flex-column">
        <div class="bg-warning p-2 text-muted chivo_mono">
        <h5 class="text-muted chivo_mono">Terms & Condition </h5>
        </div>
        <div class="p-2 custom_bg_muted mt-2">
        <p style="">
          SSLCOMMERZ enables rapid activation for transaction acceptance. With a minimum required documentation during its onboarding process is entirely online.
        </p>

        </div>
      </div>
    </div>


    <div class="col-12">
      <table class="table table-striped table-bordered table-hover">
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
          <td>5000 TK</td>
        </tr>

        <tr>
          <td>2</td>
          <td>Payable Price</td>
          <td>4000 TK </td>
        </tr>


        <tr>
          <td>3</td>
          <td>Discount </td>
          <td>1000 TK </td>
        </tr>

        <tr>
          <td>4</td>
          <td> Pkaard Charge fee </td>
          <td>40  TK </td>
        </tr>

        <tr>
          <td>4</td>
          <td> VAT (15%) </td>
          <td>6TK </td>
        </tr>
       
        </tbody>

        <tfoot>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tfoot>
      </table>
    </div>

  </div>

</div>
</section>



 @endsection;