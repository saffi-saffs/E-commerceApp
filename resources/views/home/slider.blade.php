
 <section class="slider_section ">
            <div class="slider_bg_box">
               <video  control autoplay loop muted plays-inline width=100%>
                  <source src="{{ asset('head.mp4')}}?type=video/mp4" type="video/mp4">
                      video
                  </video>
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1 class="ml3">
                                    <span>
<h1>
                                Feel the Music,</h1>

                                    </span>
                                    <br>
                                 <h1 style="color:white" class="ml3" >  Share the Beat,
                                 </h1>
                                 <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
                                 <p style="color:white">
                                
                                    Highlighted noise cancellation,
                                 superior materials, and unrivaled sound clarity
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1 class="ml3" >
                                    <span>
                                  Headphone Excellence</h1>
                                    </span>
                                     
                                    <br>
                                  <h1   style="color:white"> Powerful Speakers
                                 </h1>
                                 <p style="color:white">
                                     Emphasize connectivity options, portability, and impressive bass. 
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    Sale 20% Off</h1>
                                    </span>
                                    <br>
                                  <h1   style="color:white"> on Everything
                                 </h1>
                                 </h1>
                                 <p style="color:white">
                                  
                                    wireless headphones and speakers that seamlessly connect,
                                     and deliver top-notch sound. 
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <ol class="carousel-indicators">
                     <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                     <li data-target="#customCarousel1" data-slide-to="1"></li>
                     <li data-target="#customCarousel1" data-slide-to="2"></li>
                  </ol>
               </div>
            </div>
         </section>
         <style>
            .ml3 {
  font-weight: 900;
  font-size: 3.5em;
}
            </style>
            <script>
               var textWrapper = document.querySelector('.ml3');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml3 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: (el, i) => 150 * (i+1)
  }).add({
    targets: '.ml3',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
               </script>