<style>
    .img-box {
        text-align: center;
        margin: auto;
    }

    .img-box img {
        max-width: 100%;
        max-height: 100%; 
        border: none;
        padding:none; }
        .box{
         margin:auto;
         padding-top:20px;
         border: none;
        }
      
</style>

<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                 Our products<span>  </span>
               </h2>

            </div>
            <div>
               <form action="{{url('product_search')}}"method="GET">
                  @csrf
<input type="text" name="search" style="width:400px;" placeholder="search for some thing">
<button type="submit" value="search" style="background-color:rgb(11, 11, 11); color:rgb(255, 255, 255)"class="btn  my-3 my-sm-0 nav_search-btn" > 
                     <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
               </form>
<div>

         </div>
            </div>
            @if(session()->has('message'))
                         <div class="alert alert-success"> 
                             
     {{session()->get('message')}}
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                         </div>
                         @endif
            <div class="row">
               @foreach($product as $products)
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a href="{{url('product_details',$products->id)}}" class="option1">
                            Product Detail
                              </a>
                            <form action="{{url('add_cart',$products->id)}}"method="Post">
                              @csrf
                              <div class="row">
                                 <div class="col-md-4">
                                    
                              <input type="hidden" name="quantity" id="quantityInput" min="1">
                             
                                 </div>
                                 <div class="col-md-4">
                             <button type="submit" value="search" style="background-color:rgb(11, 11, 11); color:rgb(255, 255, 255)" class="btn btn-light" > 
                   <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                 
                              </div>
                              </div>
                            </form>
                           </div>
                        </div>
                        <div class="img-box">
                           
                           <img src="product/{{$products->image}}" alt=" {{ $products->title}}">
                        </div>
                      <div class="detail-box" style="width: 340px; height: 150px; text-align:center; padding-top:10px; margin: auto;">
    <ul style="list-style: none; text-align: left;">
        <li>
            <h4>{{$products->title}}</h4>
        </li>
        <li>
            @if($products->discount_price != null)
            <h6><span style="display: inline-block; width: 100px;">Price:Rs</span> <span style="text-decoration: line-through;">{{$products->price}}</span></h6>
            <h6 style="color:rgb(200, 37, 37)"><span style="display: inline-block; width: 100px; ">Discount Price:Rs</span> {{$products->discount_price}}</h6>
            @else
            <h6><span style="display: inline-block; width: 100px;">Price:Rs</span> {{$products->price}}</h6>
            @endif
        </li>
    </ul>
</div>





                       
                      
                     </div>
                  </div>
               @endforeach
               <span style="padding-top:20px">
            {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}</span>
         </div>
      </section>

         <script>
    // Set the default value when the page loads
    document.addEventListener("DOMContentLoaded", function() {
        var quantityInput = document.getElementById("quantityInput");
        quantityInput.value = "1"; // Set your desired default value
    });
</script>