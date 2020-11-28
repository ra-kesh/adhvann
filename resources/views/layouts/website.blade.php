<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <title>Adhvann</title>
   
    <!-- favicons -->
    <link rel="shortcut icon" href="{{ asset('website') }}/assets/images/favicon.ico" type="image/x-icon">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre&display=swap" rel="stylesheet">
   
    <!-- external css files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">


    <!-- main css/js -->

    

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <link rel="stylesheet" href="{{ asset('website') }}/css/style.css">
  

    @yield('assets')
    
</head>
<body>
     <!--? Preloader Start -->
 
    
     <!-- header -->
    <header id="header" class="sticky-top">
        <div class="container-fluid ">
                @yield('nav')
            <!-- <nav class="navbar navbar-expand-lg navbar-light "> -->
                <div class="logo mr-auto">
                   <a href="/"><img src="{{ asset('website') }}/assets/images/Group 1.svg" alt="" class="img-fluid" id="logo-image"></a>
                   <a class="navbar-brand" href="/" id="logo-name">adhvann</a>
                </div>
               
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto " id="navbar-ul">
                            <li class="nav-item ">
                            <a class="nav-link" href="/about">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/category">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/blog">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact us</a>
                            </li>
                    </ul>
                    <a class="btn btn-outline-danger" href="/download" role="button" id="download">Download</a>
                </div>  
            </nav>

        </div>
    </header>


    @yield('content')

    


    <!-- footer -->
       

    @yield('footer')
        <div class="container ">
          <div class="row ">
            <div class="col-lg-4  col-md-12 col-sm-12">
              <div class="single-footer-widget">
              <p>&copy;Copyright Adhvann. All Rights Reserved</p>
              </div>
            </div>
            <div class="col-lg-4  col-md-12 col-sm-12">
              <div class="single-footer-widget  write-footer">
                  <p>write to us at : team@adhvann.in</p>
              </div>
            </div>
            <div class="col-lg-4  col-md-12 col-sm-12">
              @yield('footer-color')       
                  <a href="#" class="twitter"><i class="bx bxl-twitter" ></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>          
          </div>
        </div>
    </footer>

    <!-- main js -->
    <script src="{{ asset('website') }}/js/category.js"></script>
    


    <!-- JS, Popper.js, and jQuery CDNS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

   <!-- Initializations -->
   <script>
       AOS.init();
   </script>

</body>
</html>