@php($title = "Gallery | Dr. Adam Kamrudeen Navi Mumbai")  
@section('meta_desc')Explore the gallery showcasing Dr. Adam Kamrudeen's work and facilities in Navi Mumbai. See our excellence in neurosurgery. @endsection
@extends('layouts.default')            
@section('content')                

<div class="breadcrumb-section">   
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center text-center">
            <div class="col-lg-12 col-md-12 col-12">
                <h2 class="breadcrumb-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s;">Gallery</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>             
                </nav>  
            </div>
        </div>
    </div>    
</div>      

<div class="space-top"></div>
  
<!-- Gallery Design -->
<div class="home-one-gallery two mt-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item one">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/gallery-1.jpg')}}" alt="gallery">
                    <a href="{{ asset('/resources/assets/images/gallery/gallery-1.jpg')}}" data-fancybox="gallery" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
                </div>    
            </div>
            <div class="col-lg-4 col-md-6">   
                <div class="gallery-item two">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/gallery-2.jpg')}}" alt="gallery">
                    <a href="{{ asset('/resources/assets/images/gallery/gallery-2.jpg')}}" data-fancybox="gallery" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item two">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/gallery-3.jpg')}}" alt="gallery">
                    <a href="{{ asset('/resources/assets/images/gallery/gallery-3.jpg')}}" data-fancybox="gallery" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item one">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/gallery-1.jpg')}}" alt="gallery">
                    <a href="{{ asset('/resources/assets/images/gallery/gallery-1.jpg')}}" data-fancybox="gallery" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
                </div>    
            </div>
            <div class="col-lg-4 col-md-6">   
                <div class="gallery-item two">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/gallery-2.jpg')}}" alt="gallery">
                    <a href="{{ asset('/resources/assets/images/gallery/gallery-2.jpg')}}" data-fancybox="gallery" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item two">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/gallery-3.jpg')}}" alt="gallery">
                    <a href="{{ asset('/resources/assets/images/gallery/gallery-3.jpg')}}" data-fancybox="gallery" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
                </div>
            </div>
        </div>
    </div>
</div>                

<div class="space-top"></div>  

@stop