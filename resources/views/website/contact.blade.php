@extends('layouts.website')
@section('nav') 
    <nav class="navbar navbar-expand-lg navbar-light "> 
@endsection
@section('content')

<div class="container" id="contact-container">

    <div class="row" id="contact-row">
        <!-- lottie player -->
        <div class="col-lg-6" id="contact-lottie">
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_vmjgyioh.json"  background="transparent"  
          speed="2"   loop  autoplay></lottie-player>

        </div>

        <!-- form  -->
        <div class="col-lg-5" id="form-wrapper">
            <h1 id="form-header">Need any help ?</h1>
            <form action="{{ route('website.contact') }}" method="POST">
                @csrf 
                @include('includes.errors')
                @if(Session::has('message-send'))
                  <div class="alert alert-success">{{ Session::get('message-send') }}</div>
                @endif
                <div class="form-group row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control " placeholder="Full Name" id="name" name="name">
                    </div>
                  </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <input type="email" class="form-control " placeholder="Email Address" name="email">
                  </div>
                </div>
              
                <div class="form-group row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="Phone number" name="number">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="Query" name="message">
                    </div>
                  </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
                </div>
              </form>

          
        </div>
    </div>


</div>


@endsection

@section('footer') 
    <footer id="footer" class="justify-content-sm-start" >
    @section('footer-color')
    <div class="single-footer-widget social-share">
    @endsection
@endsection