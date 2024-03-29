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
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                    <label for="select_district">District</label>
                    <select id="select_district" class="form-control" >
                      
                    </select>
                  </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                    <label for="">Category</label>
                    <select id="selected_category" class="form-control" >
                      <option value="0">All Category</option>
                      @php
                      $data = App\Http\Controllers\HomeController::all_category();
                      @endphp   
                      @foreach($data as $d)
                      <option value="{{$d->id}}">{{$d->category_name}}</option>
                      @endforeach
                    </select>
                  </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div> <b>Total Posted :  </b>  <span id="show_total_post"></span></div>
            </div>

        </div>
    </div>
    <div class="product_containainer" id="product_card_container">

 
    </div>
</section>


<section style="display:none">
    <div class="card_number_container">
       
        <div class="card_form_close_icon">&#10006;</div>
        <div class="card_number_form">
            <form action="">
                <div>
                    <input type="text" style="margin-bottom: 0.5rem;" class="form-control" name="" id="" placeholder="Enter Card Number">
                    <a href="/card_login_otp_view" class="btn btn-info btn-block btn-sm">Submit</a>
                </div>
            </form>
        </div>

        <div class="form_overly"></div>
    </div>
</section>


<script>
//initial variable 

let index = 1;

     function load_district(){
        let li = '<option value="0"> All District </option>';
        District.forEach(function (data){
        li  += `<option   value="${data['id']}">${data['name']}</option>`;

        })
        select_district.innerHTML = li
    }

    load_district();

    document.addEventListener('DOMContentLoaded', () => {
          
           const urlParams = new URLSearchParams(window.location.search);
            for (const opt of selected_category.children) {
           
            if(opt.value == urlParams.get('c') ){
                opt.selected = true;
            }
           }

           for (const opt of select_district.children) {
           if(opt.value == urlParams.get('d') ){
               opt.selected = true;
           }
          }
          get_product_from_db();

        });



     async  function get_product_from_db(){

        
        console.log(index)

            const urlParams = new URLSearchParams(window.location.search);
            urlParams.get('c')
            
            let server_data ={
                category_id : urlParams.get('c'),
                district_id :urlParams.get('d'),
                page:index
            }

            try{
        const response = await fetch(`/get_product_by_d_and_c`,{
            method:'POST',
            body:JSON.stringify(server_data),
            headers: new Headers({
            'Content-Type': 'application/json',  
        })
        } );
       
        const result = await response.json();
        console.log(result)
       if(response.status ==200 && response.ok ==true){
        let all_card = '';
        let img_src = '';
        let map = result["all_data"].map((d)=>{
            let privilege_info = Number.isInteger(Number(d['privilege'])) == true? `<p><b class="text-muted">Discount : </b>${d['privilege']} %</p>`:`<p><b class="text-muted">Privilege : </b>${d['privilege'].toUpperCase()}</p>`;

           if(d['img_path'] ==null || d['img_path'] == ""  ){
            let img_src =[]
           }else{
            img_src = d['img_path'].split(",")
           }
           console.log(img_src)


            // let img_src = d['img_path'] !=null ? d['img_path'].split(","):''

            if(Number(d['is_room'])==1){
                return  `
         <div class="card mb-4 p_tag">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="product_img mb-sm-5 custom_mb_sm "><img src="${img_src == ''?'https://t4.ftcdn.net/jpg/04/99/93/31/360_F_499933117_ZAUBfv3P1HEOsZDrnkbNCt4jc3AodArl.jpg':`https://img.pkaard.com/images/${img_src[0]}`}" alt="Pkaard"></div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h5 >  ${d['title']}</h5>
                       
                        <div>
                            <p> <i class="fa fa-map-marker" style="font-size:15px"></i>${d['address']} </p>
                            <p><b class="text-muted" >District</b> ${d['district_name']}</p>
                        </div>

                        <div>
                          
                           <p> Upto <b class="text-muted">${d['discount']} </b>  %  Discount</p>
                        </div>

                        <div class="row mt-3">
                           
                            <div class="col-6">
                               
                                <a class="btn btn-sm btn-info btn-block" href="/sub_product_view\\${d['id']}">All Discount  &#8250;</a>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
           
           `;
            }else{
            return  `
         <div class="card mb-4 p_tag">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="product_img mb-sm-5 custom_mb_sm "><img src="${img_src == ''?'https://t4.ftcdn.net/jpg/04/99/93/31/360_F_499933117_ZAUBfv3P1HEOsZDrnkbNCt4jc3AodArl.jpg':`https://img.pkaard.com/images/${img_src[0]}`}" alt="Pkaard"></div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h5 >  ${d['title']}</h5>
                       
                        <div>
                            <p> <i class="fa fa-map-marker" style="font-size:15px"></i>${d['address']} </p>
                            <p><b class="text-muted" >District</b> ${d['district_name']}</p>
                        </div>

                        <div>
                           ${privilege_info}
                            <p class="${d['regular_price']==null || d['regular_price']==''?'d-none':''  }"><b class="text-muted">Regular Prize : </b> ${d['regular_price']} TK</p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a class="btn btn-sm btn-warning btn-block" onclick="is_card_login('purchase_details/p_id-${d['id']}')"  >Get Discount</a>
                             
                            </div>
                            <div class="col-6">
                               
                                <a class="btn btn-sm btn-info btn-block" href="/product_details_view\\${d['id']}">See More &#8250;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
           `;

    }
        })

      
        product_card_container.innerHTML = map
      
        show_total_post.innerHTML = result["total_data"]
       }
       
    }catch(e){
        console.log(e);
      

    }


        }


 window.onscroll=(evt)=>{

// if(window.pageYOffset >= product_card_container.scrollHeight){
//     index++
//     console.log("LOad more")
//     window.scrollTo(0, 150);
    
//     get_product_from_db();    
// }

}

document.getElementsByTagName("select");

console.log(document.getElementsByTagName("select"))
const urlParams = new URLSearchParams(window.location.search);
for (const select  of document.getElementsByTagName("select")) {

    select.onchange = function(){
       console.log(this.id)

       if(this.id == 'select_district'){
        location.href = `${location.origin}/product_view?c=${urlParams.get('c')}&d=${this.value}`;

       }

       if(this.id == 'selected_category'){
        location.href = `${location.origin}/product_view?c=${this.value }&d=${urlParams.get('d')}`;

       }
    }
    
}
</script>
 @endsection;