<x-app-layout>
     
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
table{margin: auto;
     width: 70%;
     border: 3px white solid;
   
     margin-top: 15px;
     text-align: center;
}
.h1{
     font-size: 50px;
     padding-top:20px;
     text-align: center;
}
.img_size{
     width:100px;
     height:150px;
}
.th_color{
     background-color:green; 
}
.th_design{
     padding:18px;
}
 tr:nth-child(odd) {
            background-color: rgb(78, 82, 78);
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

               @if(session()->has('message'))
                         <div class="alert alert-success"> 
                             
     {{session()->get('message')}}
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                         </div>
                         @endif
               <h1 class="h1">All Products</h1>


<table>

     <tr class="th_color">
          <th class="th_design">product</th>
          <th class="th_design">Description</th>
          <th class="th_design">Quantity</th>

          <th class="th_design">Category</th>

          <th class="th_design">Price</th>

          <th class="th_design">Discount Price</th>

          <th class="th_design">Product Image</th>

          
          <th class="th_design">Delete</th>
          
          <th class="th_design">Edit</th>

     </tr>
     @foreach($product as $product)
      <tr>
           <td>{{$product->title}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->quantity}}</td>

          <td>{{$product->category}}</td>

          <td>{{$product->price}}</td>

          <td>{{$product->discount_price}}</td>

          <td><img src="/product/{{$product->image}}" class="img_size"></td>
          <td><a href="{{url('delete_product',$product->id)}}" class="btn btn-danger" onclick="return confirm('are you sure to delete this?')">Delete</a></td>
                   <td><a href="{{url('edit_product',$product->id)}}"class="btn btn-success">Edit</a></td>



     </tr>
@endforeach
</table>

          </div>
     </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>