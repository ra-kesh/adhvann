@extends('layouts.website')
@section('nav') 
    <nav class="navbar navbar-expand-lg navbar-light "> 
@endsection
@section('content')

<main id="post-main">
        <div class="post-title text-center">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->subtitle }}</p>
        </div>
        <div class="post-img1 container-fluid px-0">
            <img src="{{ $post->image }}" alt="Tata-Buzzard-Sport-GIMS-2019-Le-Grand-Saconnex-GIMS0650-1" border="0" class="img-fluid w-100">
        </div>
        <div class="post-wrapper">
            <div class="post-content">
                <div class="section">
                    <hr id='post-hr'>
                    <div class="post-category d-flex justify-content-between">
                        <p>{{ $post->category->name }}</p>
                        <p>{{ $post->created_at->format('M d, Y') }}</p>
                    </div>
                   
                    {!! $post->description !!}
    
                   

                </div>
              
            </div>

        </div>

    </main>
@endsection
@section('footer') 
    <footer id="footer" class="justify-content-sm-start" >
    @section('footer-color')
    <div class="single-footer-widget social-share">
    @endsection
@endsection
