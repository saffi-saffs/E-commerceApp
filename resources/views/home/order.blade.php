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

<style>

.center{
     margin:auto;
     width:70%;
     padding:30px;
     text-align: center;
}
table,th,td{
  
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
</style>

   </head>
   <body style="color: aliceblue">
     
         @include('home.header')
  
<div class="center">
     <table>
     <tr>
<th >Product Title</th>
<th >Quantity</th>
<th  >   &nbsp Price &nbsp </th>
<th > Payment Status</th>
<th> Delivery status</th>
<th > Image</th>
<th> Order Status</th>
     </tr>
     @foreach($order as $order)

<tr>
     <td >{{$order->product_title}}</td>
     <td >{{$order->quantity}}</td>
     <td>{{$order->price}}</td>
     <td>{{$order->payment_status}}</td>
     <td>{{$order->delivery_status}}</td>
     <td><img src="/product/{{$order->image}}" style="height:170px; width:170px"></td>
   <td>
     @if($order->delivery_status=='processing')
<a href={{url('cancel_order',$order->id)}} class="btn btn-primary" style="color:white;background-color:black ;border:black"onclick="return confirm('Are you sure to cancel this order?')">Cancel order</a>
  
@else
<p style="color: white ;font-size:25px">Has been Delivered<p>
@endif
</td>

</tr>
@endforeach
</table>
</div>

         
      </div>
     </div>
      <!-- footer end -->
      
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