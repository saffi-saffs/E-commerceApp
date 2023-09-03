<!DOCTYPE html>
<html>
   <head>
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
      <title>Beats</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style type="text/css">
.center{
     margin:auto;
     width:70%;
     padding:30px;
     text-align: center;
}
table{
  padding-top:20px
}
th{
     height: 50px;
     padding:7px;
}

body{
  background: -webkit-linear-gradient(left, #1c1f1e, #ae3e2a);
  background: linear-gradient(to right, #202323, #efd4ce);

}
.btn btn-primary{
     color: white;
     background-color: #29322e
}
  tr:nth-child(odd) {
            background-color: rgb(37, 38, 37);
        }
        table,tr,td{
          border:grey solid 1px;
        }
        .outline{
          text-align: center;
        }
        .i{
          margin-top:30px;
        }
</style>

   </head>
   <body style="color: aliceblue">
      <div class="hero_area">

         @include('home.header')
        
      @if(session()->has('message'))
                         <div class="alert alert-success"> 
                             
     {{session()->get('message')}}
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                         </div>
                         @endif

<div class="i">
     <table class="center"><tr class="theader">
<th>Product title</th>
<th>Product Quantity</th>
<th>Price</th>
<th>Image</th>
<th>Action</th>

     </tr>
     <?php $totalprice=0;?>
@foreach($cart as $carts)
     <tr>
          <td>{{$carts->product_title}}</td>
          <td>{{$carts->quantity}}</td>
          <td>${{$carts->price}}</td>
          <td><img src="/product/{{$carts->image}}" class="imgdis" style="height:170px; width:170px"></td>
          <td><a href="{{url('remove_cart',$carts->id)}}" onclick="return confirm('Are you sure to remove it?')" class="btn btn-danger">Remove product</a></td>

          
          </tr>
          <?php $totalprice = $totalprice + $carts->price?>

          @endforeach

     </table>
</div>
               <div class="outline">
                    <h1 class="total_deg">
                    Total Price:${{$totalprice}}</h1>
               </div>

               <div class="outline">
                    <h1 style="font-size:24px;padding-bottom:15px"><u>Proceed to order</u></h1>
                    <a href="{{url('cash_order')}}" class="btn btn-danger">cash on delivery</a>
                    <a href="{{url('stripe',$totalprice)}}" class="btn btn-danger">paycard</a>

               </div>
</div>
    
      <!-- footer start -->
 
   
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