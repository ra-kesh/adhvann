@extends('layouts.website')
@section('nav') 
    <nav class="navbar navbar-expand-lg navbar-light "> 
@endsection
@section('content')

    <div class="download-wrapper">
            <!-- hero section -->
            <section id="hero" class="d-flex align-items-center">
                <div class="welcome-text" id="download-div">
                    <div id="download-text">
                        <h1>Get excited we’re about to launch the app soon</h1>
                        <div class="welcome-image">
                            <img src="{{asset('website')}}/assets/images/Frame 6.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="newsletter">
                        <div class="row align-items-center" >
                            <div class="col-lg-5 order-2 order-lg-1 " id="newsletter-div">
                                <div class="newsletter-text">
                                    <h1 id="newsletter-text">Be the first one to be notified</h1>
                                    <form class="form-inline">
                                        <div class="container d-flex  justify-space-between ">
                                            <input type="email" class="form-control " id="inlineFormInputName2" placeholder="Enter Your Email">
                                            <button type="button" class="btn btn-outline-light" id="newsletter-button">SUBMIT</button>      
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-5 order-1 order-lg-2 " id="newssvg-div">
                                <img src="{{asset('website')}}/assets/images/newsletter bw 1.svg" alt="" srcset="" id="newsletter-image">                       
                            </div>
                        
                        </div>
                    </div>
                </div>
            
            </section>
    </div>
 
@endsection

@section('footer') 
    <footer id="down-footer" class="justify-content-sm-start" >
    @section('footer-color')
    <div class="single-footer-widget social-share">
    @endsection
@endsection