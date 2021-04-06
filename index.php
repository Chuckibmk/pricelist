<?php
  require_once 'inc/config.php';

  

?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <title>Theone - Onepage Multipurpose Template</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- favicon -->
    <link href="img/favicon-theone.png" rel="icon" sizes="32x32" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bt.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- theone CSS -->
    <link href="css/animated-theone.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/theone-style.css" rel="stylesheet">
    <link href="css/color/blue.css"  rel="stylesheet">
    <link href="css/queries-theone.css" media="all" rel="stylesheet" type="text/css">
  </head>
  <body>
  
    <!-- preloader -->
    <div class="bg-preloader"></div>
    <div id="preloadbar"></div>
    <div class="preloader">
      <div class="mainpreloader">
        <span></span>
      </div>
    </div>
    <!-- preloader end -->
    
    
    
    <!-- content wraper -->
    <div class="content-wrapper">
    
    <header class="init">
      <!-- nav -->
      <div class="navbar-default navbar-fixed-top">
        <div class="container">
          <div class="row">
        
            <!-- menu mobile display -->
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
              <span class="icon icon-bar"></span> 
              <span class="icon icon-bar"></span> 
              <span class="icon icon-bar"></span>
            </button> 
            
            <!-- logo --> 
            <a class="navbar-brand" href="index.html">
              <img class="white" alt="logo" src="img/logo.png">
              <img class="black" alt="logo" src="img/logo-black.png">
            </a> 
            <!-- logo end -->
          
            <!-- mainmenu start -->
            <div class="menu-init" id="main-menu">
              <nav id="menu-center">
                <ul>
                  <li><a class="actived" href="home.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul> 
              </nav>
            </div>
            <!-- mainmenu end -->
          
          </div>
        </div>
        <!-- container -->
      </div>
      <!-- nav end -->
    </header>
      
      <!-- home -->
    <section aria-label="home" class="mainbg parallax-window" data-parallax="scroll" data-image-src="img/bg-1.jpg" id="home">
      <div id="particles"></div>  
      <div class="container">
        <div class="row">
          <!-- intro -->
          <div class="overlay-main v-align">
            <div class="col-md-12 col-xs-12">
            
              <!-- <h1 class="onStep" data-animation="fadeInUp" data-time="300">PriceList Search</h1> -->


              <div class=" align-items-center w-100">
                <div class="col-md-12 col-lg-12 m-h-auto">
                  <div class="col-md-6">
                    <div class="box p-60">
                      <h3>
                        PriceList Search
                      </h3>
                      
                      <p>
                      Find Your Favourite Prices.
                      </p>
      
                      <form action="results.php" class="row" id="form-contact" name="form-contact" method="GET">

                        <input id="name-contact" name="item" placeholder="Item" type="text"> 


                        <!-- this category is under serious contemplation, its use might be stopped
                          but de commented options is just for learning-->
                        <select name="category" class="w-100">
                          <!-- <option value="1">Gadgets</option>
                          <option value="2">Clothing</option>
                          <option value="3">Utensils</option>
                          <option value="4">Sports</option>
                          <option value="5">Equipment</option> -->
                          <option>admin</option>
                          <option>comments</option>
                          <option>contacts</option>
                          <option>posts</option>
                          <option>users</option>
                          <option>replies</option>

                        </select> 
                        <!-- <textarea cols="50" id="message-contact" name="message" placeholder="your enquiry" rows="4"></textarea> -->

                        <div class="btn-home onStep" data-animation="fadeInUp" data-time="800">
                          <input class="scroll-link" type="submit" value="Search">
                        </div>
                      </form>
                  </div>
                </div> 
      
                </div>
              </div>

            </div>
          </div>
          <!-- intro end -->
        </div>
      </div>

    </section>
      <!-- home end -->
      
      <!-- section -->
      <!-- <section class="whitepage no-bottom no-top no-padding"> -->
        
        <!-- text -->
        <!-- <div class="container-fluid">
          <div class="row">
          
          <div class="no-gutter">
          
          <div class="col-md-4">
           <div class="features no-margin">
           <span class="fa fa-building"></span>
           <h3 class="heading">Ad Slot1</h3>
           <p class="content">High resolution graphics and responsive layout makes theme look gvand crisp on any device and screen size.</p>
           <a href="#">Learn More</a>
           </div>
          </div>
          
          <div class="col-md-4">
           <div class="features no-margin">
           <span class="fa fa-connectdevelop"></span>
           <h3 class="heading">Ad Slot2</h3>
           <p class="content">High resolution graphics and responsive layout makes theme look gvand crisp on any device and screen size.</p>
           <a href="#">Learn More</a>
           </div>
          </div>
          
          <div class="col-md-4">
           <div class="features no-margin">
           <span class="fa fa-cubes"></span>
           <h3 class="heading">Ad Slot3</h3>
           <p class="content">High resolution graphics and responsive layout makes theme look gvand crisp on any device and screen size.</p>
           <a href="#">Learn More</a>
           </div>
          </div>
          
          </div>
          
            </div>
           </div>
      </section> -->
      <!-- section end -->
   
  
 
      <!--  milestone --> 
      <!-- <section aria-label="counter" class="parallax-window" data-parallax="scroll" data-image-src="img/testi-bg-5.jpg">
         <div class="container">
            <div class="row">
          
                    <div id="wrap-count">
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="milestone-counter onStep" data-animation="fadeInUp" data-time="0">
                      <span><i class="ti-timer"></i></span> 
                      <span class="highlight white">1800+</span>
                      <div class="milestone-details white">Working Hours</div>
                      </div>
                     </div>
            
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="milestone-counter onStep" data-animation="fadeInUp" data-time="200">
                      <span><i class="ti-panel"></i></span> 
                      <span class="highlight white">100+</span>
                      <div class="milestone-details white">Finished Project</div>
                      </div>
                     </div>
             
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="milestone-counter onStep" data-animation="fadeInUp" data-time="400">
                      <span><i class="ti-face-smile"></i></span> 
                      <span class="highlight white">250+</span>
                      <div class="milestone-details white">Happy Costumers</div>
                      </div>
                     </div>
            
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="milestone-counter onStep" data-animation="fadeInUp" data-time="600">
                      <span><i class="ti-cup"></i></span> 
                      <span class="highlight white">400</span>
                      <div class="milestone-details white">Award Winning</div>
                      </div>
                     </div>
                    </div>

            
            </div>
            </div>
      </section>  -->
      <!-- milestone end -->
      
      <!-- section projects -->
      <!-- <section id="projects" class="whitepage">
        <div class="container">
          <div class="row">
          
            <div class="col-md-12">
              <h3 class="devider-heading">Our Gallery
              <span class="devider-heading-center"></span>
              </h3>
            </div> -->
          
            <!-- spacer -->
            <!-- <div class="space-single"></div> -->
          
            <!-- project -->
            <!-- <div class="col-md-12"> -->
              <!-- filter project -->
                  <!-- <ul id="filter-hide">
                    <li class="filtter-icon"><i class="ti-layout-grid3-alt"></i>
                    </li>
                  </ul>
                  
                  <ul id="filter-porto">
                    <li class="filt-projects-w selected" data-project="*">ALL
                    </li>
                    
                    <li class="filt-projects-w" data-project=".tren">TRENDING
                    </li>

                    <li class="filt-projects-w" data-project=".web">WEB DESIGN
                    </li>

                    <li class="filt-projects-w" data-project=".psd">PSD TO HTML
                    </li>

                    <li class="filt-projects-w" data-project=".art">ART WORK
                    </li>
                  </ul>
                   -->
              <!-- filter project end -->
              
                  <!-- <div id="w-gallery-container" class="w-gallery-container">
                  
                      <div class="w-gallery tren psd art">
                      <div class="projects-grid onStep" data-animation="fadeInLeft" data-time="100">
                        <div class="hovereffect-color">
                        <img src="img/projects-w/10.jpg" alt="" class="w-gallery-image">
                        <div class="overlay">
                        <div class="v-align wrap">
                        <span class="icon">
                        <a class="big-img-1" href="img/projects-w/10.jpg">
                        <i class="ti-search"></i>
                        </a> 
                        <a href="projects-detail.html">
                        <i class="ti-link"></i>
                        </a>
                        </span>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                      
                      <div class="w-gallery web">
                      <div class="projects-grid onStep" data-animation="fadeInUp" data-time="300">
                      <div class="hovereffect-color">
                      <img src="img/projects-w/11.jpg" alt="" class="w-gallery-image">
                      <div class="overlay">
                        <div class="v-align wrap">
                        <span class="icon">
                        <a class="big-img-1" href="img/projects-w/11.jpg">
                        <i class="ti-search"></i>
                        </a> 
                        <a href="projects-detail.html">
                        <i class="ti-link"></i>
                        </a>
                        </span>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                      
                      <div class="w-gallery psd">
                      <div class="projects-grid onStep" data-animation="fadeInRight" data-time="600">
                      <div class="hovereffect-color">
                      <img src="img/projects-w/12.jpg" alt="" class="w-gallery-image">
                      <div class="overlay">
                        <div class="v-align wrap">
                        <span class="icon">
                        <a class="big-img-1" href="img/projects-w/12.jpg">
                        <i class="ti-search"></i>
                        </a> 
                        <a href="projects-detail.html">
                        <i class="ti-link"></i>
                        </a>
                        </span>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                      
                      <div class="w-gallery tren psd">
                      <div class="projects-grid onStep" data-animation="fadeInUp" data-time="0">
                      <div class="hovereffect-color">
                      <img src="img/projects-w/13.jpg" alt="" class="w-gallery-image">
                      <div class="overlay">
                        <div class="v-align wrap">
                        <span class="icon">
                        <a class="big-img-1" href="img/projects-w/13.jpg">
                        <i class="ti-search"></i>
                        </a> 
                        <a href="projects-detail.html">
                        <i class="ti-link"></i>
                        </a>
                        </span>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                      
                      <div class="w-gallery art">
                      <div class="projects-grid onStep" data-animation="fadeInUp" data-time="0">
                      <div class="hovereffect-color">
                      <img src="img/projects-w/14.jpg" alt="" class="w-gallery-image">
                      <div class="overlay">
                        <div class="v-align wrap">
                        <span class="icon">
                        <a class="big-img-1" href="img/projects-w/14.jpg">
                        <i class="ti-search"></i>
                        </a> 
                        <a href="projects-detail.html">
                        <i class="ti-link"></i>
                        </a>
                        </span>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                      
                      <div class="w-gallery art">
                      <div class="projects-grid onStep" data-animation="fadeInUp" data-time="0">
                      <div class="hovereffect-color">
                      <img src="img/projects-w/15.jpg" alt="" class="w-gallery-image">
                      <div class="overlay">
                        <div class="v-align wrap">
                        <span class="icon">
                        <a class="big-img-1" href="img/projects-w/15.jpg">
                        <i class="ti-search"></i>
                        </a> 
                        <a href="projects-detail.html">
                        <i class="ti-link"></i>
                        </a>
                        </span>
                        </div>
                        </div>
                        </div>
                      </div>
                      </div>
                      
                      <div class="w-gallery tren psd art">
                      <div class="projects-grid onStep" data-animation="fadeInUp" data-time="0">
                        <div class="hovereffect-color">
                        <img src="img/projects-w/10.jpg" alt="" class="w-gallery-image">
                        <div class="overlay">
                        <div class="v-align wrap">
                        <span class="icon">
                        <a class="big-img-1" href="img/projects-w/10.jpg">
                        <i class="ti-search"></i>
                        </a> 
                        <a href="projects-detail.html">
                        <i class="ti-link"></i>
                        </a>
                        </span>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                      
                      <div class="w-gallery web">
                      <div class="projects-grid onStep" data-animation="fadeInUp" data-time="0">
                      <div class="hovereffect-color">
                      <img src="img/projects-w/11.jpg" alt="" class="w-gallery-image">
                      <div class="overlay">
                        <div class="v-align wrap">
                        <span class="icon">
                        <a class="big-img-1" href="img/projects-w/11.jpg">
                        <i class="ti-search"></i>
                        </a> 
                        <a href="projects-detail.html">
                        <i class="ti-link"></i>
                        </a>
                        </span>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                      
                      <div class="w-gallery psd">
                      <div class="projects-grid onStep" data-animation="fadeInUp" data-time="0">
                      <div class="hovereffect-color">
                      <img src="img/projects-w/12.jpg" alt="" class="w-gallery-image">
                      <div class="overlay">
                        <div class="v-align wrap">
                        <span class="icon">
                        <a class="big-img-1" href="img/projects-w/12.jpg">
                        <i class="ti-search"></i>
                        </a> 
                        <a href="projects-detail.html">
                        <i class="ti-link"></i>
                        </a>
                        </span>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>

                  </div> -->
                  
                  <!-- load more -->
                  <!-- <div class="text-center">
                  <div class="btn-gallery">
                      <a class="link-class" href="#">Load More</a>
                  </div>
                  </div>
                  
            </div> -->
            <!-- project end -->
                
          <!-- </div>
        </div>
      </section> -->
      <!-- section projects end -->
      
      <!--  testimony --> 
      <!-- <section id="testi" class="parallax-window" data-parallax="scroll" data-image-src="img/testi-bg-4.jpg">
         <div class="container">
           <div class="row"> -->
            <!-- <h1>Customer Reviews</h1> -->
            
                <!-- <div id="owl-testimonial" class="owl-carousel">
                
                  <div class="item col-md-12">
                      <blockquote>
                      <h3>Emma Watson</h3>
                        <p>Bring Professionalisme to Clients who according your needs The First Priority</p>
                        <small>Someone famous in <cite title="Source Title" class="color">Source Title</cite></small>
                      </blockquote>
                  </div>
                  
                  <div class="item col-md-12">
                      <blockquote>
                      <h3>Dorine De Vries</h3>
                        <p>Look famous. Be legendary. Appear complex. Act easy. Radiate presence. Travel light. Seem a dream. Prove real.</p>
                        <small>Someone famous in <cite title="Source Title" class="color">Source Title</cite></small>
                      </blockquote>
                    </div>  
                    
                  <div class="item col-md-12">
                      <blockquote>
                      <h3>Maikel Straayer</h3>
                        <p>Look famous. Be legendary. Appear complex. Act easy. Radiate presence. Travel light. Seem a dream. Prove real.</p>
                        <small>Someone famous in <cite title="Source Title" class="color">Source Title</cite></small>
                      </blockquote>
                  </div>                        
                </div> -->

            <!-- </div>
          </div>
      </section>  -->
      <!-- testimony end --> 
      
      
       
      <section id="brand" class="brand-page" aria-label="brands" style="background-image:url(img/bg-logo.jpg)">
        <!-- brands-->
          <div class="container">
            <div class="row">
            
              <div class="owl-carousel" id="owl-brand">
              
                <div class="item">
                  <img alt="background" src="img/ourclients/1.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/2.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/3.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/4.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/5.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/6.png">
                </div>
                
                 <div class="item">
                  <img alt="background" src="img/ourclients/1.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/2.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/3.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/4.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/5.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/6.png">
                </div>

              </div>
              
            </div>
          </div>
        <!-- brands end-->
      </section>
        
      
      <!-- footer -->
      <footer class="black text-center">
        <div class="container">
          <div class="row">
          
          <div class="col-md-12">
                <div class="social-icons">
                  <a href="#"><span class="ti-facebook"></span></a>
                  <a href="#"><span class="ti-dribbble"></span></a>
                  <a href="#"><span class="ti-twitter"></span></a>
                  <a  href="#"><span class="ti-instagram"></span></a>
                  <a href="#"><span class="ti-linkedin"></span></a>
                </div>
            </div>
            
            <div class="col-md-12">
              <span class="color">&copy; theone 2017.</span> all reserved design by on3step
            </div>

            
          </div>
        </div>
      </footer>
      <!-- footer end -->
      
      <!-- ScrolltoTop -->
      <div id="totop" class="init">
        <span class="ti-angle-up"></span>
      </div>
      
    </div>
    <!-- content wraper end -->
    
    <!-- plugin JS -->
    <script src="plugin/pluginstheone.js" type="text/javascript"></script> 
    <script src="plugin/bootstrap.min.js"></script>
    <script src="plugin/parallax.min.js" type="text/javascript"></script>
    <script src="plugin/jquery.particleground.js" type="text/javascript"></script> 
    <script src="plugin/sticky.js" type="text/javascript"></script> 
    <!--  map google -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCQ5KODzqooIP496GPLRaMAsZ4eN8Vro_U"></script>
    <script src="js/mapinline-1.js" type="text/javascript"></script>  
    <!-- theone JS -->
    <script src="js/theone.js" type="text/javascript"></script>
    <script src="js/nav.js" type="text/javascript"></script>
  
  </body>
</html>