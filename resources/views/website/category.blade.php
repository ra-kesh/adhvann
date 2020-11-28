@extends('layouts.website')
@section('assets')
    <link rel="stylesheet" href="{{ asset('website') }}/css/style2.css">
    <script src="{{asset('website')}}/js/category.js"></script>
@endsection
@section('nav') 
    <nav class="navbar navbar-expand-lg navbar-dark "> 
@endsection
@section('content')


      <!-- hero section -->
      <section id="category-hero" class="d-flex align-items-center">
            <div class="container " id="category-container">
                <div class="row align-items-center" id="category-row" >
                    <div class="col-lg-5 pt-6 pt-lg-0 order-2 order-lg-1 " id="text-div">
                        <div class="category-welcome-text" id="category-text">
                            <h1>Learning from the best made possible only for you</h1>
                        </div>
                    </div>
                    <div class="hero-img col-lg-6 order-1 order-lg-2 ">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_4xv5tufz.json"  background="transparent"
                          speed="1"   loop  autoplay id="category-lottie"></lottie-player>
                    </div>
                </div>
            </div>
        

    </section>
    <section id="category-grid">
        <div class="container">
          <div class="row">
                <div class="col-lg-6 single-card" >
                        <div class="card design-card">
                             <!-- hidden card -->
                                <div class="card2" id="first-card">
                                        <a href="#" class="close"><i class="fa fa-times"></i></a>
                                        <div class="content">
                                            <ul class="card-text category-list">
                                                <li>Graphic Design</li>
                                                <li>User Interface Design</li>
                                                <li>Design Tools</li>
                                                <li>Design Principles</li>
                                                <li>User Experience Design</li>
                                            </ul>
                                        </div>
                                </div>
                                <div class="title" >
                                    <h5 class="card-title" >Designing</h5>
                                    <hr>
                                </div>

                                <!-- displayed card -->
                                <div class="card-body design-card active" id="show-card1">
                                        
                                        <div class="content">
                                            <p class="card-text">Graphic design is the process of visual communication and problem-solving through the use of typography, photography, iconography and illustration.</p>    
                                        </div>       
                                </div>
                                <div class="btn btn-outline-light expand1" >see more</div>


                        </div>
                </div>

                <div class="col-lg-6 ">
                <div class="card coding-card">
                        <!-- hidden card -->
                        <div class="card2" id="second-card">
                            <a href="#" class="close"><i class="fa fa-times"></i></a>
                        
                            <div class="content">
                                <ul class="card-text category-list">
                                    <li>Python</li>
                                    <li>Web development</li>
                                    <li>Android app development</li>
                                    <li>Machine learning</li>
                                    <li> C++</li>
                                    <li>Data science</li>
                                    <li>Ethical hacking</li>
                                    <li>Cloud computing</li>
                                    <li>Core Java</li>
                                    <li>Internet Of things</li>
                                </ul>
                            </div>
                        </div>
                        <div class="title">
                            <h5 class="card-title">Coding & IT</h5>
                            <hr>
                        </div>

                        <!-- displayed card -->
                        <div class="card-body active">
                                
                                <div class="content">
                                    <p class="card-text">Coding is a set of instructions that make computers do what user wants them to do. Computer software, games, apps and websites are all possible because of coding.</p>    
                                </div>
                            
                        </div>
                        <div class="btn btn-outline-light  expand2">see more</div>
                
                </div>
                </div>
          </div>
          <div class="row">
            <div class="col-lg-6 single-card">
              <div class="card skill-card">
                        <!-- hidden card -->
                        <div class="card2" id="third-card">
                            <a href="#" class="close"><i class="fa fa-times"></i></a>
                           
                            <div class="content">
                                <ul class="card-text category-list">
                                    <li>Communication Skills</li>
                                    <li>Psychology</li>
                                    <li>Basics of finance</li>
                                    <li>Interview Skills</li>
                                    <li>Personality Development</li>
                                </ul>
                            </div>
                        </div>
                        <div class="title">
                            <h5 class="card-title">Soft Skills</h5>
                            <hr>
                        </div>

                        <!-- displayed card -->
                        <div class="card-body active">
                               
                                <div class="content">
                                    <p class="card-text">Soft skills are a combination of people skills, social skills, communication skills, character or personality traits, attitudes, career attributes.</p>    
                                </div>
                               
                        </div>
                        <div class="btn btn-outline-light  expand3">see more</div>

              </div>
            </div>
            <div class="col-lg-6 ">
              <div class="card finance-card">
                   <!-- hidden card -->
                   <div class="card2" id="fourth-card">
                    <a href="#" class="close"><i class="fa fa-times"></i></a>
                    
                    <div class="content" id="finance-ul">
                        <ul class="card-text category-list">
                            <li>Financial markets</li>
                            <li>Personal finance</li>
                            <li>Basics of finance</li>
                            <li>Financial modelling</li>
                            <li>Investment management</li>
                            <li>Quantative & technical analysis</li>
                            <li>Cryptocurrency & blockchain</li>
                        </ul>
                    </div>
                </div>
                <div class="title">
                    <h5 class="card-title">Finance & Investment</h5>
                    <hr>
                </div>

                <!-- displayed card -->
                <div class="card-body active">
                       
                        <div class="content">
                            <p class="card-text">Learning about finance and investment is very crucial for everyone .Finance teaches us the management of money while investment teaches us how we can use money to make more money.</p>    
                        </div>
                        
                </div>
                <div class="btn btn-outline-light expand4 " >see more</div>
              </div>
            </div>
          </div>  
          <div class="row">
            <div class="col-lg-6 single-card">
              <div class="card language-card">
                        <!-- hidden card -->
                        <div class="card2" , id="fifth-card">
                            <a href="#" class="close"><i class="fa fa-times"></i></a>
                           
                            <div class="content">
                                <ul class="card-text category-list">
                                    <li class="french">French</li>
                                    <li class="spanish">Spanish</li>
                                    <li class="german">German </li>

                                </ul>
                            </div>
                        </div>
                        <div class="title">
                            <h5 class="card-title">Language</h5>
                            <hr>
                        </div>

                        <!-- displayed card -->
                        <div class="card-body active">
                              
                                <div class="content">
                                    <p class="card-text">learn a new language based on your interest, it will also help you in communicating with the natives in case your planning to go abroad to pursue higher education .</p>    
                                </div>
                                
                        </div>
                        <div class="btn btn-outline-light expand5">see more</div>
              </div>

            </div>


            <div class="col-lg-6">
              <div class="card marketing-card">

                   <!-- hidden card -->
                   <div class="card2" , id="sixth-card">
                    <a href="#" class="close"><i class="fa fa-times"></i></a>
                   
                    <div class="content" id="marketing-ul">
                        <ul class="card-text category-list">
                            <li>Digital Marketing</li>
                            <li>Social Media Marketing</li>
                            <li>Influencer Marketing</li>
                            <li>Google Ads</li>
                            <li>Search Engine Optimisation</li>
                        </ul>
                    </div>
                </div>
                <div class="title">
                    <h5 class="card-title">Marketing & Management</h5>
                    <hr>
                </div>

                <!-- displayed card -->
                <div class="card-body active">
                       
                        <div class="content">
                            <p class="card-text">Ever wonder how marketing works ? If not, learn about the basic and advanced marketing tactics and get to know how these companies influence you !</p>    
                        </div>
                        
                </div>
                <div class="btn btn-outline-light expand6">see more</div>
        
    </section>

 

@endsection

@section('footer') 
    <footer id="cat-footer" class="justify-content-sm-start" >
    @section('footer-color')
    <div class="single-footer-widget social-share-category">
    @endsection
@endsection