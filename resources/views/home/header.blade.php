<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{url('/')}}"><img width="250" src="home/images/logo.png" style="height:50px;width:50px"alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                      
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('products')}}">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog_list.html">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="">Contact</a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
                        </li>
                           <li class="nav-item">
                           <a class="nav-link" href="{{url('show_order')}}">order</a>
                        </li>

                         @if (Route::has('login'))
                              @auth
                                 <li class="nav-item">
    
      
<form method="POST" action="{{ route('logout') }}">
        @csrf
        <a class="nav-link " href="#" onclick="event.preventDefault(); this.closest('form').submit();">
            {{ __('Logout') }}
        </a>
    </form>
          

                                 </li>
                                 </li>

                              @else
                                 <li class="nav-item">
                                    <a class="nav-link" id="logincss"href="{{ route('login') }}">Login</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="registercss" href="{{route('register')}}">register</a>
                                 </li>

                              @endauth
                           @endif
                          
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->