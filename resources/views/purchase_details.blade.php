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



 @endsection;