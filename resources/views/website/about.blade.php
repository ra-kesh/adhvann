@extends('layouts.website')
@section('nav') 
    <nav class="navbar navbar-expand-lg navbar-light "> 
@endsection
@section('content')

 
  <!-- hero section -->
  <section id="hero" class="d-flex align-items-center">

<div class="single-welcome-slide" id="about-slide">
    
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 " id="text-div">
                <div class="welcome-text">
                    <h1>Know More about adhvann</h1>
                </div>
            </div>
            <div class="hero-img col-lg-6 order-1 order-lg-2 " id="#about-hero">
                <img src="{{ asset('website') }}/assets/images/welcome 1.svg" class="img-fluid " alt="">
            </div>
        </div>
    </div>
</div>

</section>



<main id="about-main">
<!-- categories -->

<section id="categories" class="categories">

    <div class="main-slide">

        <div class="container-main">
            <div class="row justify-content between"id="main-div">
                <div class="col-lg-6 d-flex align-items-center justify-content-center contact-img">
                    <img src="{{ asset('website') }}/assets/images/business meeting 1.svg" alt="" class="img-fluid" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0 text-div1"id="text-div3">
                    <h2 data-aos="fade-up">What we do ?</h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Our platform brings together the information from all the important players of the industry 
                        and compiles them for our target audience, saving their time and effort.
                    </p>
                    <a class="btn btn-danger" href="/category" role="button" id="contact">Browse skills</a>
                </div>
            </div>
        </div>

    </div>


</section>
<!--blogs  -->
<section id="blogs" class="blogs">

    <div class="main-slide">

        <div class="container-main">
            <div class="row justify-content between"id="main-div">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 text-div1"id="text-div2">
                    <h2 data-aos="fade-up">Our Methodology</h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Our company creates a portal via which the user gets all the
                        potential resources required to learn a skill. This in turn ensures that our users benefit by saving in the first place. 
                    </p>
                    
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center order-1 order-lg-2  blog-img">
                    <img src="{{ asset('website') }}/assets/images/seo 1.svg" alt="" class="img-fluid" data-aos="zoom-in">
                </div>
            </div>
        </div>

    </div>
  
</section>


</main>


@endsection

@section('footer') 
    <footer id="footer" class="justify-content-sm-start" >
    @section('footer-color')
    <div class="single-footer-widget social-share">
    @endsection
@endsection