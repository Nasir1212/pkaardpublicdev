@extends('master')

@section('content')
<style>
    .checked {
  color: orange;
}
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
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                    <label for="select_option">District</label>
                    <select id="select_option" class="form-control" >
                      
                    </select>
                  </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div><b>Category : </b>Hotel & Restoret </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div> <b>Total Posted :  </b>05</div>
            </div>

        </div>
    </div>
    <div class="product_containainer">
        <div class="card mb-4 p_tag">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="product_img mb-sm-5 custom_mb_sm "><img src="https://cf.bstatic.com/xdata/images/hotel/square600/237245203.webp?k=e1d49fe514cbb5e871fea4f623a297593567fc52ee77d8219d8d8dd70fc5e471&o=&s=1" alt="Pkaard"></div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h5 >  Renaissance Dhaka Gulshan Hotel Opens in new window </h5>
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <div>
                            <p> <i class="fa fa-map-marker" style="font-size:25px"></i> 1st floor, House- 37 Rd 12, ঢাকা 1212</p>
                            <p><b class="text-muted" >District</b> Dhaka</p>
                        </div>

                        <div>
                            <p><b class="text-muted">Discount : </b>40%</p>
                            <p><b class="text-muted">Regular Prize : </b>3000 TK</p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a class="btn btn-sm btn-warning btn-block" href="">Get Discount</a>
                             
                            </div>
                            <div class="col-6">
                               
                                <a class="btn btn-sm btn-info btn-block" href="/product_details_view">See More &#8250;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-4 p_tag">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="product_img mb-sm-5 custom_mb_sm "><img src="https://cf.bstatic.com/xdata/images/hotel/square600/375649623.webp?k=f9835471576ee54d25fea7732b3d72ed2488dc9498f496d51c09e92190c0384c&o=&s=1" alt="Pkaard"></div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h5 >  THE WAY Dhaka </h5>
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <div>
                            <p> <i class="fa fa-map-marker" style="font-size:25px"></i> Uttara, Dhaka 15.7 km from centre</p>
                            <p><b class="text-muted" >District</b> Dhaka</p>
                        </div>

                        <div>
                            <p><b class="text-muted">Discount : </b>30%</p>
                            <p><b class="text-muted">Regular Prize : </b>3000 TK</p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a class="btn btn-sm btn-warning btn-block" href="">Get Discount</a>
                             
                            </div>
                            <div class="col-6">
                               
                                <a class="btn btn-sm btn-info btn-block" href="/product_details_view">See More &#8250;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card mb-4 p_tag">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="product_img mb-sm-5 custom_mb_sm "><img src="https://cf.bstatic.com/xdata/images/hotel/square600/239411242.webp?k=ede8fddd143c94797712a903fc0b98bcfeb2a368fa77ce79afcba10b1f7ee7db&o=&s=1" alt="Pkaard"></div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h5 >  Holiday Inn Dhaka City Centre, an IHG Hotel</h5>
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <div>
                            <p> <i class="fa fa-map-marker" style="font-size:25px"></i> Uttara House- 37 Rd 12, Dhaka 1212</p>
                            <p><b class="text-muted" >District</b> Dhaka</p>
                        </div>

                        <div>
                            <p><b class="text-muted">Discount : </b>40%</p>
                            <p><b class="text-muted">Regular Prize : </b>3000 TK</p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a class="btn btn-sm btn-warning btn-block" href="">Get Discount</a>
                             
                            </div>
                            <div class="col-6">
                               
                                <a class="btn btn-sm btn-info btn-block" href="/product_details_view">See More &#8250;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card mb-4 p_tag">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="product_img mb-sm-5 custom_mb_sm "><img src="https://lh5.googleusercontent.com/p/AF1QipNZQZ9T4bCfAtdMYdu-9vbWBbHjM1GhN0PqcLfH=w592-h404-n-k-no-v1" alt="Pkaard"></div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h5 >  Renaissance Dhaka Gulshan Hotel Opens in new window </h5>
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <div>
                            <p> <i class="fa fa-map-marker" style="font-size:25px"></i> 1st floor, House- 37 Rd 12, Uttara Dhaka 1212</p>
                            <p><b class="text-muted" >District</b> Dhaka</p>
                        </div>

                        <div>
                            <p><b class="text-muted">Discount : </b>20%</p>
                            <p><b class="text-muted">Regular Prize : </b>7300 TK</p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a class="btn btn-sm btn-warning btn-block" href="">Get Discount</a>
                             
                            </div>
                            <div class="col-6">
                               
                                <a class="btn btn-sm btn-info btn-block" href="/product_details_view">See More &#8250;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-4 p_tag">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="product_img mb-sm-5 custom_mb_sm "><img src="https://lh5.googleusercontent.com/p/AF1QipNgAIle3ZRROhZ6kRjI-2rNsad2F9oISvWclv2b=w592-h404-n-k-no-v1" alt="Pkaard"></div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h5 >  HOTEL SHALIMAR MOTIJHEEL - CENTRE OF CITY </h5>
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <div>
                            <p> <i class="fa fa-map-marker" style="font-size:25px"></i> House- 37 Rd 12, ঢাকা 1212</p>
                            <p><b class="text-muted" >District</b> Dhaka</p>
                        </div>

                        <div>
                            <p><b class="text-muted">Discount : </b>46%</p>
                            <p><b class="text-muted">Regular Prize : </b>12000 TK</p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a class="btn btn-sm btn-warning btn-block" href="">Get Discount</a>
                             
                            </div>
                            <div class="col-6">
                               
                                <a class="btn btn-sm btn-info btn-block" href="/product_details_view">See More &#8250;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
     function load_district(){
        let li = '<option> All District </option>';
        District.forEach(function (data){
        li  += `<option  data-id="${data['id']}"  value="${data['name']}">${data['name']}</option>`;

        })
        select_option.innerHTML = li
    }

    load_district();
</script>
 @endsection;