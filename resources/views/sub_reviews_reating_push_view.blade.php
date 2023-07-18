@extends('master')

@section('content')

<style>
    .reviews_reating_col {

    }
    .reviews_reating_col span{

    }
    .star_div {
    width: 13rem;
    border: 2px solid #ddd;
    height: 5rem;
    display: flex;
    justify-content: center;
    align-items: center;
}

.star_div span {
    cursor: pointer;
    font-size: 1.777rem;
    color: #585858;
    margin: 3px;
}

/* .star_div span:hover {
    color: orange;
} */
.orange_color{
    color: orange !important;
}

.reviews{
    width: 20rem;
    border: 2px solid #ddd;
    height: 5rem;
  
}
</style>


  <section id="star_reating" >
    <div class="reviews_reating_container">
        <h5 class=" ml-2 chivo_mono">Please ! Give us your Reating Star  <span class="fa fa-star" aria-hidden="true"></span>  </h5>
        <div class="reviews_reating_col">
            <div class="star_div ml-5">
            <span  id="1"  class="fa fa-star-o star_icon" aria-hidden="true"></span> 
            <span  id="2"  class="fa fa-star-o star_icon" aria-hidden="true"></span> 
            <span  id="3"  class="fa fa-star-o star_icon" aria-hidden="true"></span> 
            <span  id="4" class="fa fa-star-o  star_icon" aria-hidden="true"></span> 
            <span  id="5" class="fa fa-star-o star_icon" aria-hidden="true"></span> 
        </div>
        </div>
    </div>
  </section>


  <section   id="comment" style="display: none">
    <div class="reviews_reating_container">
        <h5 class=" ml-2 chivo_mono">Please ! Give us your Reviews  </h5>
        <div class="reviews_reating_col">
            <div class="reviews ml-5">
          <textarea id="user_comment_field" class="form-control mb-1"  style="width: 100%"></textarea>
           <button onclick="get_user_comment();" class="btn btn-info btn-block btn-sm">Submit</button>
            </div>
        </div>
    </div>
  </section>

<script>

    var state = {

    }

 
    console.log(state)
    for (const star of    document.getElementsByClassName("star_icon")) {
       star.addEventListener('mouseover',onMouseover)
       star.addEventListener('click',onClick)

        
    }

    function onMouseover(){
        for (const star_icon of    document.getElementsByClassName("star_icon")) {
             star_icon.classList.remove('orange_color')
            }
            for (let i = 1; i <= this.id; i++) { 
             document.getElementById(`${i}`).classList.add('orange_color')
            }
    }

    function onClick(){
        debugger;
        let session_data =JSON.parse(sessionStorage.is_card_login_data)
        state['rating'] = this.id;
        state['card_id'] = SessionExport.getLocalStorage()['card_id'];
        state['sub_product_id'] =  session_data.sub_product_id;
        // document.getElementById("star_reating").classList.add("d-none");
        // document.getElementById("comment").classList.remove("d-none");
        $("#star_reating").fadeOut();
        $("#comment").fadeIn(2000);
        console.log(state)
       
    }

 async  function get_user_comment(){
        let server_data = {
            ...state,
            comment:document.getElementById("user_comment_field").value
        }

        console.log(server_data)
        debugger;
        console.log(server_data)
        const response = await fetch(`/insert_sub_reviews_reating`,{
            method:'POST',
            body:JSON.stringify(server_data),
            headers: new Headers({
            'Content-Type': 'application/json',
          
        })
            
           
            
        } );
       
        const result = await response.json();
        console.log(result)

        if(response.status == 200){
            if(result['condition'] ==true){
                swal("Thanks !", `${result['message']}`, "success");
                let session_data =  JSON.parse(sessionStorage.is_card_login_data)
                sessionStorage.clear();
                location.href = `${location.origin}/sub_product_details_view/${session_data.sub_product_id}`;

            }else{
                swal("Opps !", `${result['message']}`, "error");
            }
        }

    }
</script>
 @endsection;