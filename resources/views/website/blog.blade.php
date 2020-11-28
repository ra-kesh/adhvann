@extends('layouts.website')
@section('assets')
    <link rel="stylesheet" href="{{ asset('website') }}/css/style4.css">
@endsection
@section('nav') 
    <nav class="navbar navbar-expand-lg navbar-light "> 
@endsection
@section('content')

 <!-- hero section -->
<section id="hero-blog" class="d-flex align-items-center">

<div class="blog-welcome-slide" id="blog-slide" > 
    <div class="container " id="blog-container">
        <div class="row align-items-center ">
            <div class="col-lg-5 pt-6 pt-lg-0 order-2 order-lg-1 " id="text-div">
                <div class="blog-welcome-text">
                    <p id="blog-p">Get deep insights of particular field</p>
                    
                </div>
            </div>
            <div class=" col-lg-6 order-1 order-lg-2" id="blog-lottie">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player  src="https://assets5.lottiefiles.com/packages/lf20_iueg2dob.json"  background="transparent" 
                 speed="1"   loop  autoplay></lottie-player>
            </div>
        </div>
    </div>
</div>

</section>

<section id=blogs>
    <div class="blog-div ">
        <div class="blog-div-title">
            <h3 class="text-center">Latest Blogs</h3>
            <hr>
        </div>
        <div class="blogs-container row">
        

        @foreach($recentPosts as $post)
                  
         
        <div class="blog-card ">
            <figure><a href="{{ route('website.post', ['slug' => $post->slug]) }}"><img src="{{ $post->image }}" alt="Your Blog Title"/></a></figure>
            <div class="blog-content">
                <div class="blog-topic"><a href="#">{{ $post->category->name }}</a></div>
                <h3 class="blog-title"><a href="{{ route('website.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h3>
                <div class="blog-footer"><a class="blog-category" href="#"></a><a class="blog-date" href="#"><span> {{ $post->created_at->format('M d, Y') }} </span></a></div>
            </div>
           </div>
        
        @endforeach
       
      
            
    
     

    </div>

 



</section>


   

@endsection
@section('footer') 
    <footer id="footer" class="justify-content-sm-start" >
    @section('footer-color')
    <div class="single-footer-widget social-share">
    @endsection
@endsection