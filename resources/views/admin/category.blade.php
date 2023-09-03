<x-app-layout>
     
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style typo="text/css">
.div_center{
     text-align: center;
     padding-top:20px ;
}
h2{
     font-size: 40px;
     padding-bottom: 40px;
}
.input_color{
     color:black;
}
.center{
     margin: auto;
     width:50%;
     text-align: center;
     margin-top:30px;
     border:3px solid white;
     
}
td{
     border:1px white solid;
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
                    <div class="div_center">
                         @if(session()->has('message'))
                         <div class="alert alert-success"> 
                             
     {{session()->get('message')}}
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                         </div>
                         @endif
                        <h2 style="font-size:40px">Add category</h2>
                        <form action="{{url('/add_category')}}"method="POST">
                         @csrf
                         <input class="input_color" type="text" name="category" placeholder="Write category name">
                         <input type="submit" class="btn btn-primary" name="submit" value="Add category"style="background-color:white;color:black;height:40px">
                        </form>
                    </div>
                    <table class="center">
                         <tr><td>Category name</td>
                         <td>Action</td>
                         </tr>
                         @foreach($data as $datas)
                         <tr><td>{{$datas->category_name}}</td>
               <td><a class="btn btn-danger" href={{url('delete_category',$datas->id)}} onclick="return confirm('Are you sure to delete {{$datas->category_name}} category?') ">Delete</a></td></tr>
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