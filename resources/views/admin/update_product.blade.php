<x-app-layout>
     
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
     <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
     .center{
          text-align: center;
          padding-top: 40px;
     }
     h2{
         font-size: 40px;
          padding-bottom: 40px;

     }
     .text_color{
          color: black;
          padding-bottom: 20px;
     }
     label{
          display:inline-block;
          width:200px;
     }
     .div_design{
padding-bottom: 15px;
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

                    <div class="center">
                         <h2>Update Product</h2>
                         <form method="POST" action="{{url('/update_product_confirm',$product->id)}}" enctype="multipart/form-data">
                         @csrf
                              <div class="div_design">
                              <label >Product Title</label>
                              <input required type="text" name="title" placeholder="product name" class="text_color" value={{$product->title}}>
                              </div>
                  
                         
                   
                         <div class="div_design">
                         <label >Quantity</label>
                         <input required type="number" name="quantity" min ="0" placeholder="Quantity" value="{{$product->quantity}}"class="text_color">
                         </div>
                         <div class="div_design">
                             <label >Product Price</label>
                              <input required type="number" name="price" placeholder="price" value="{{$product->price}}"class="text_color">
                                                  
                         </div>
                            <div class="div_design">
                        
                              <label >Description</label>
                              <input required type="text" name="description" placeholder="description" value="{{$product->description}}" class="text_color">
                         </div>
                      
                          <div class="div_design">
                        
                              <label >Discount price</label>
                              <input  type="number" name="discount"  placeholder="discount if applicable" value="{{$product->discount}}"class="text_color">
                         </div>
                        <div class="div_design">
                        
                              <label >Product Category</label>
                             <select name="category" class="text_color">
                              <option value="{{$product->category}}" selected=" ">{{$product->category}}</option>
                           @foreach($category as $category)
                              <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                              @endforeach
                      
                         </select>
                         </div>
                          <div class="div_design">
                         <label >Current Product Image </label>
                         <img src="/product/{{$product->image}}" width="100" height="100" style="margin:auto " >
                         </div>
                         <div class="div_design">
                         <label >Change Product Image </label>
                         <input  type="file" name="image"  >
                         </div>
                         <div class="div_design">
                       
                         <input type="submit" name="submit"  value="update product" class="btn btn-primary">
                         </div>
                         </form>
                    </div>
                    

                    

                    

          </div>
  </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>