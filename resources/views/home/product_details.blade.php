<!DOCTYPE html>
<html>
   <head>
     <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Beats-</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />


<style>
   .box {
            display: flex;
            justify-content: space-between;

         }

         .detail-box- {
            flex: 1;
            margin-right: 250px;
            margin-left: 160px;
            margin-top:50px;
            font-size: medium;
              min-width: 400px;
          
         


         }
 .img-box {
        flex: 1;
        text-align: right;
         margin-left: 250px;
       

         
    }
    
body{
  background: -webkit-linear-gradient(left ,#202323, #efd4ce);
  background: linear-gradient(to right, #1c1f1e, #c2776a);
  color:azure;

}

  
   </style>

   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- slider section -->
 
     <div class="col-sm-6 col-md-4 col-lg-4" >
                     <div class="box">
                        
                        
                        <div class="detail-box-" style="  width: 800px; ">
                           <h2 style="font-size:70px" >
                              <u> {{ $product->title}}</u>
                           </h2>
                           <br>
                        

                                 @if($product->discount_price!=null)
                                 <h6 style="font-size:30px"><span style="display: inline-block; ">Price</span>Rs. <span style="text-decoration: line-through;">{{$product->price}}</span></h6>   <br>
            <h6 style="font-size:25px"><span style="display: inline-block; width: 100px; ">Discount Price</span> Rs.{{$product->discount_price}}</h6>   <br>
            @else
            <h6 style="font-size:25px"><span style="display: inline-block; width: 100px;">Price</span>Rs {{$product->price}}</h6>   <br>
            @endif
                           <h6 style="font-size:25px">
                             Product Category:  {{ $product->category}}
                         </h6>    <br> 
                           <h6 style="font-size:25px">
                             Product Quantity:{{ $product->quantity}}
                         </h6>    <br>
                           <h6 style="font-size:25px">
                             Product Description {{ $product->description}}
                         </h6>    <br>  
                       <form action="{{url('add_cart',$product->id)}}"method="Post">
                              @csrf
                              <div class="row">
                                 <div class="col-md-4">
                              <input type="number" name="quantity" value="1" min="1">
                                 </div>
                                 <div class="col-md-4">
                              <input type="submit" value="Add to cart" style="border:#ae3e2a 2px solid"/>
                              </div>
                              </div>
                            </form>
                        </div>
                        <div class="img-box" style="flex: 1; padding: 70px;">
                           <img src="product/{{$product->image}}" alt=" {{ $product->title}}" width="380" height="505">
                        </div>
                     </div>
                  </div>
      </div>
      <!-- footer end -->
          <!-- footer start -->
     @include('home.footer')
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>