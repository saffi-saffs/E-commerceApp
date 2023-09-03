<x-app-layout>
     
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
.ttable{
     border:2px solid white;
     width:90%;
    margin:auto;
 padding:10px;
 

     text-align: center;
}
.ttr{
padding-bottom:80px;
border:3px solid white;
}

th,tr,td{
border:1px solid white;
padding-left:3px;
padding-right:3px;


}
.img_deg{
     height:60px;
     width:80px
}
.h1deg{
    text-align:center;font-size:40px;font-width:20px;
}  tr:nth-child(odd) {
            background-color: rgb(78, 82, 78);
        }
         
    </style>
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial -->
     <div class="main-panel">
          <div class="content-wrapper">

<h1 class="h1deg">All orders</h1>
          <div style="padding-left:400px;padding-bottom:30px;">

               <form action="{{url('search')}}"method="get">

                    @csrf
                    <input type="text"  style="color:black"name="search" placeholder="search for something">
                    <input type="submit" value="search" class="btn btn-outline-primary " style="background-color:rgb(53, 58, 56) ;height:60px;color:white">
                    <form>
          </div>


<table class="ttable">

     <tr class="trr">
          <th>Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Product</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Payment Status</th>
          <th>Delivery status</th>
          <th>Image</th>
          <th> Delivered</th>

     </tr>
@forelse($order as $order)
     <tr class="trr">
          <td>{{$order->name}}</td>
          <td>{{$order->email}}</td>
          <td>{{$order->address}}</td>
          <td>{{$order->phone}}</td>
          <td>{{$order->product_title}}</td>

          <td>{{$order->quantity}}</td>
          <td>{{$order->price}}</td>
          <td>{{$order->payment_status}}</td>
          <td>{{$order->delivery_status}}</td>  
          <td>
           <img src="/product/{{$order->image}}"></td>
           <td>
@if($order->delivery_status=='processing')
              <a href="{{url('delivered',$order->id)}}" class="btn btn-primary" onclick="return confirm('are you sure this product is delivered?')">Delivered</a>
             @else
             <p style="color:greenyellow">delivered</p>
              @endif
           </td>
     </tr>
@empty
<tr>
<td colspan="20">No Data Found</td>

</tr>
     @endforelse
</table>



          </div>
     </div>
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>