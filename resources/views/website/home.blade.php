@extends('layouts.website')
@section('nav') 
    <nav class="navbar navbar-expand-lg navbar-light "> 
@endsection
@section('content')

 
    <!-- hero section -->
    <section id="hero" class="d-flex align-items-center">

        <div class="single-welcome-slide">
            <div class="background">
                <img src="{{ asset('website') }}/assets/images/Rectangle 6.svg" alt="">
            </div>

            <div class="container " id="home-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 " id="text-div">
                        <div class="welcome-text">
                            <h1>No need to waste time finding resources to learn</h1>
                            <a class="btn btn-danger" href="./download/" role="button" id="download">Download</a>
                        </div>
                    </div>
                    <div class="hero-img col-lg-6 order-1 order-lg-2 ">
                        <img src="{{ asset('website') }}/assets/images/heroImage.svg" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>


    <main id="main">
        <!-- categories -->
        <section id="categories" class="categories">

            <div class="main-slide">
                <div class="main-background">
                    <img src="{{ asset('website') }}/assets/images/Rectangle 8.svg" alt="">
                </div>

                <div class="container-main">
                    <div class="row justify-content between"id="main-div">
                        <div class="col-lg-6 d-flex align-items-center justify-content-center contact-img">
                            <img src="{{ asset('website') }}/assets/images/aboutImage.svg" alt="" class="img-fluid" data-aos="zoom-in">
                        </div>
                        <div class="col-lg-6 pt-5 pt-lg-0 text-div1"id="text-div3">
                            <h2 data-aos="fade-up">Why waste time on other websites ?</h2>
                            <p data-aos="fade-up" data-aos-delay="100">
                                Name a skill and we have every possible resource you need to learn that skill. Easily
                                upskill yourself and stand out from others in this competitive world.
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
                <div class="main-background1">
                    <img src="{{ asset('website') }}/assets/images/Rectangle 9.svg" alt="">
                </div>

                <div class="container-main">
                    <div class="row justify-content between"id="main-div">
                        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 text-div1"id="text-div2">
                            <h2 data-aos="fade-up">Read More about skill development</h2>
                            <p data-aos="fade-up" data-aos-delay="100">
                                Our blogs take a deeper dive into the world of skill development, which will help you to
                                gain knowledge about industries , in demand skills etc.
                            </p>
                            <a class="btn btn-danger" href="/blog" role="button" id="blogs">Blogs</a>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center justify-content-center order-1 order-lg-2  blog-img">
                            <img src="{{ asset('website') }}/assets/images/blogimg.svg" alt="" class="img-fluid" data-aos="zoom-in">
                        </div>
                    </div>
                </div>

            </div>
          
        </section>

        <!-- contact us -->
        
        <section id="contact" class="contact">
            <div class="main-slide">
                <div class="main-background">
                    <img src="{{ asset('website') }}/assets/images/Rectangle 8.svg" alt="">
                </div>

                <div class="container-main">
                    <div class="row justify-content between"id="main-div">
                        <div class="col-lg-6 d-flex align-items-center justify-content-center contact-img">
                            <img src="{{ asset('website') }}/assets/images/contactImage.svg" alt="" class="img-fluid" data-aos="zoom-in">
                        </div>
                        <div class="col-lg-6 pt-5 pt-lg-0 text-div1"id="text-div3">
                            <h2 data-aos="fade-up">Have a query ?<br> Reach out to us</h2>
                            <p data-aos="fade-up" data-aos-delay="100">
                            If you have any query related to content or you are stuck somewhere in between and need our help in context of learning a skill, reach out to us
                            </p>
                            <a class="btn btn-danger" href="/contact" role="button" id="contact">Contact</a>
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