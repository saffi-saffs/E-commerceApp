<x-app-layout>
     
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
     .center{
          text-align: center;
      
       

   
     }
     form{
          padding:10px;
                 border: 3px solid white;
               
                 width:70%;
                 margin:auto;
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
                         <h1 style="padding-bottom:10px; font-size:40px">Add product</h1>
                         <form method="POST" action="{{url('add_product')}}" enctype="multipart/form-data">
                         @csrf
                              <div class="div_design">
                              <label >Product Title</label>
                              <input required type="text" name="title" placeholder="product name" class="text_color">
                              </div>
                  
                         
                   
                         <div class="div_design">
                         <label >Quantity</label>
                         <input required type="number" name="quantity" min ="0" placeholder="Quantity" class="text_color">
                         </div>
                         <div class="div_design">
                             <label >Product Price</label>
                              <input required type="number" name="price" placeholder="price" class="text_color">
                                                  
                         </div>
                            <div class="div_design">
                        
                              <label >Description</label>
                              <input required type="text" name="description" placeholder="description" class="text_color">
                         </div>
                      
                          <div class="div_design">
                        
                              <label >Discount price</label>
                              <input  type="number" name="discount"  placeholder="discount if applicable" class="text_color">
                         </div>
                        <div class="div_design">
                        
                              <label >Product Category</label>
                             <select name="category" class="text_color">
                              <option value=" " selected=" ">Add Product Category</option>
                         
                         @foreach($category as $category)
                              <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                              @endforeach
                         </select>
                         </div>
                         <div class="div_design">
                         <label >Product Image </label>
                         <input required type="file" name="image"  >
                         </div>
                         <br>
                         <div class="div_design">
                       
                         <input required type="submit" name="submit"  value="Add product" class="btn btn-primary" style="background-color: rgb(52, 48, 48);borde-radius:2px;height:40px;border-color:black">
                         </div>
                         </form>
                    </div>
                    

                    

                    

          </div>
  </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->

       <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
  </body>
</html>