
<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">

            <div class="search_bar" style="display:flex " >
                <div >
                  <form action="{{url('category_product')}}" method="GET">
               <button type="submit"style="width:180px ;height:50px ;margin-right:10px; padding:2px;border:none; "class="category_btn" value="headphones"name="category" >Headphone</button>
               <button type="submit"style="width:180px ;height:50px ;margin-right:10px; padding:2px;border:none;"class="category_btn"value="earbuds"name="category">Earbuds</button>
               <button type="submit"style="width:180px ;height:50px ;margin-right:10px; padding:2px;border:none;"class="category_btn"value="speakers"name="category">Speaker</button>
               <button type="submit"style="width:180px ;height:50px ;margin-right:10px; padding:2px;border:none;"class="category_btn"value="earphones"name="category">Earphone</button>
              </form>    
            </div>
             
               <form action="{{url('search_product')}}"method="GET">
                  @csrf
                  <input type="text" name="search" style="width:150px;" placeholder="search for some thing">
                  <button type="submit" value="search"class="btn  my-2 my-sm-0 nav_search-btn" > 
                     <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
               </form>
           

          
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
                                             <div class="detail-box" style="width: 450px; height: 150px; text-align:center; padding-top:10px;margin:10px">

                         <ul style="list-style: none; text-align: left;">
        <li>
            <h4>{{$products->title}}</h4>
        </li>
        <li>
            @if($products->discount_price != null)
            <h6><span style="display: inline-block; width: 100px;">Price</span>Rs. <span style="text-decoration: line-through;">{{$products->price}}</span></h6>
            <h6 style="color:rgb(200, 37, 37)"><span style="display: inline-block; width: 100px; ">Discount Price</span> Rs.{{$products->discount_price}}</h6>
            @else
            <h6><span style="display: inline-block; width: 100px;">Price</span>Rs {{$products->price}}</h6>
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