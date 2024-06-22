@php($title = "Top Neurosurgeon Navi Mumbai - Dr. Adam Kamrudeen")      
@section('meta_desc')Discover top-rated neurosurgeon in Navi Mumbai, Dr. Adam Kamrudeen, specializing in brain and spine tumor care. Expertise you can trust for optimal treatment. @endsection
@extends('layouts.default')              
@section('content')                           

<!-- Start Slider Design Section -->
<div id="carouselExampleIndicators" class="carousel slide d-lg-block d-md-block d-none" data-bs-ride="carousel">
    <!-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> -->
    <div class="carousel-inner">
        <div class="carousel-item active">      
        <img src="{{ asset('/resources/assets/images/slider-img1.jpg')}}" class="d-block w-100 img-fluid" alt="">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('/resources/assets/images/slider-img2.jpg')}}" class="d-block w-100 img-fluid" alt="">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>  
</div>
<!-- End Slider Design Section -->

<!-- Start Slider Design Section -->
<div id="carouselExampleIndicators" class="carousel slide d-lg-none d-md-none d-block" data-bs-ride="carousel">      
    <div class="carousel-inner">
        <div class="carousel-item active">      
            <img src="{{ asset('/resources/assets/images/mob-banner.jpg')}}" class="d-block w-100 img-fluid" alt="">
        </div>
    </div> 
</div>  
<!-- End Slider Design Section -->

<div class="space-top"></div>

<!-- About section -->
<section class="about-us" id="start">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-md-0 mt-0">        
                <div class="about-text-box">  
                    <h1>about doctor</h1>
                    <h1>about doctor</h1>      
                    <h1>about doctor</h1>
                    <h2>Dr. Adam Kamrudeen</h2>
                    <div class="mb-4">
                        <h5><i class="fa fa-long-arrow-right" aria-hidden="true"></i>MBBS, MS - General Surgery,</h5>
                        <h5 class="pb-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>MCh - Neuro Surgery</h5>
                        <p>Dr. Adam Kamrudeen, an esteemed consultant neurosurgeon renowned for his expertise in brain and spinal surgeries. Dr. Kamrudeen earned his Masters in General Surgery from SN Medical College, Agra, followed by intensive neurosurgical training at the prestigious Sree Chitra Tirunal Institute Of Sciences and Technology, Trivandrum, recognized as an Institute of National Importance in India. With a keen focus on brain and spinal tumors, Dr. Kamrudeen specializes in treating various neurological conditions, including spinal joint and disc diseases, brain infarctions (commonly known as stroke or paralysis), hydrocephalus, and more. Dedicated to providing holistic patient care, Dr. Kamrudeen is deeply committed to fostering both the physical and mental recovery of his patients, striving tirelessly to ensure their well-being.</p>
                    </div> 
                </div>  
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-md-0 mt-5">
                <div class="about-img-box">
                    <img class="img-box img-fluid" src="{{ asset('/resources/assets/images/dr-adam-pic-home-about-sec.jpg')}}" style="box-shadow: 16px 16px 0px 0px rgb(53 167 135);">
                </div>                
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div>

<!-- Brain Surgery -->
<div class="sec-brain-surgery">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="section-title-4 text-center">
                    <h4>services</h4>
                    <h2>Brain Surgery</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="package-card2">
                    <a href="{{route('brain-tumor-surgery-open-and-endoscopic')}}">
                        <img src="{{ asset('/resources/assets/images/services/brain-tumor-surgery.jpg')}}" alt="brain-tumor-surgery">
                    </a>
                    <a class="package-card2-content" href="{{route('brain-tumor-surgery-open-and-endoscopic')}}">
                        <div class="title">
                            <h6>Brain Tumor Surgery (Open & Endoscopic)</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-md-0 mt-5">
                <div class="package-card2">
                    <a href="{{route('minimal-invasive-surgery')}}">
                        <img src="{{ asset('/resources/assets/images/services/minimal-invasive-surgery.jpg')}}" alt="minimal-invasive-surgery">
                    </a>
                    <a class="package-card2-content" href="{{route('minimal-invasive-surgery')}}">
                        <div class="title">
                            <h6>Minimal Invasive Surgery</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-md-0 mt-5">
                <div class="package-card2">
                    <a href="{{route('hydrocephalus')}}">
                        <img src="{{ asset('/resources/assets/images/services/hydrocephalus.jpg')}}" alt="hydrocephalus">
                    </a>
                    <a class="package-card2-content" href="{{route('hydrocephalus')}}">
                        <div class="title">
                            <h6>Hydrocephalus</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-lg-5 mt-md-5 mt-5">
                <div class="package-card2">
                    <a href="{{route('vascular-disease-stroke-paralysis-avm-aneurysm')}}">
                        <img src="{{ asset('/resources/assets/images/services/vascular-disease.jpg')}}" alt="vascular-disease">
                    </a>
                    <a class="package-card2-content" href="{{route('vascular-disease-stroke-paralysis-avm-aneurysm')}}">
                        <div class="title">
                            <h6>Vascular Disease (Stroke/Paralysis, AVM, Aneurysm)</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-lg-5 mt-md-5 mt-5">
                <div class="package-card2">
                    <a href="{{route('epilepsy-surgery')}}">
                        <img src="{{ asset('/resources/assets/images/services/epilepsy-surgery.jpg')}}" alt="epilepsy-surgery">
                    </a>
                    <a class="package-card2-content" href="{{route('epilepsy-surgery')}}">     
                        <div class="title">
                            <h6>Epilepsy Surgery</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-lg-5 mt-md-5 mt-5">
                <div class="package-card2">
                    <a href="{{route('traumatic-brain-injury')}}">
                        <img src="{{ asset('/resources/assets/images/services/traumatic-brain-injury.jpg')}}" alt="traumatic-brain-injury">
                    </a>
                    <a class="package-card2-content" href="{{route('traumatic-brain-injury')}}">
                        <div class="title">
                            <h6>Traumatic Brain Injury (SDH, EDH, ICH)</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>      

<!-- Spine Surgery -->
<section class="sec-spine-surgery">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="section-title-4 text-center">
                    <h4 class="text-white">services</h4>
                    <h2 class="text-white">Spine Surgery</h2>  
                </div>
            </div>
        </div>
        <div class="row home-two-blog">
            <div class="col-lg-6 col-md-4 col-12">
                <div class="blog-wrrap d-flex">
                    <div class="blog-img">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/services/disc-prolapse.jpg')}}" alt="disc-prolapse">
                    </div>
                    <div class="blog-content">
                        <div class="blog-title">
                            <h4><a href="{{route('disc-prolapse')}}">Disc Prolapse</a></h4>
                        </div>
                        <p>The bones (vertebrae) that form the spine in the back are cushioned by discs</p>
                        <div class="read-more-btn">
                            <a href="{{route('disc-prolapse')}}">
                                <svg width="43" height="10" viewBox="0 0 43 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H41" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M36 9L41 5L36 1" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                                Read More
                            </a>          
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-12 mt-5">
                <div class="blog-wrrap d-flex">
                    <div class="blog-img">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/services/spinal-cord-tumor.jpg')}}" alt="spinal-cord-tumor">
                    </div>
                    <div class="blog-content">
                        <div class="blog-title">
                            <h4><a href="{{route('spinal-cord-tumor')}}">Spinal Cord Tumor</a></h4>
                        </div>
                        <p>A spinal cord tumor, also called an intradural tumor.</p>
                        <div class="read-more-btn">
                            <a href="{{route('spinal-cord-tumor')}}">    
                                <svg width="43" height="10" viewBox="0 0 43 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H41" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M36 9L41 5L36 1" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                                Read More
                            </a>
                        </div>    
                    </div> 
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-12 mt-5">
                <div class="blog-wrrap d-flex">
                    <div class="blog-img">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/services/spinal-trauma.jpg')}}" alt="spinal-trauma">
                    </div>
                    <div class="blog-content">
                        <div class="blog-title">
                            <h4><a href="{{route('spinal-trauma')}}">Spinal Trauma</a></h4>
                        </div>
                        <p>A traumatic spinal cord injury may happen because of sudden blow or cut the spine.</p>
                        <div class="read-more-btn">
                            <a href="{{route('spinal-trauma')}}">
                                <svg width="43" height="10" viewBox="0 0 43 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H41" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M36 9L41 5L36 1" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                                Read More
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-12 mt-5">
                <div class="blog-wrrap d-flex">
                    <div class="blog-img">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/services/spondylosis.jpg')}}" alt="spondylosis">
                    </div>
                    <div class="blog-content">
                        <div class="blog-title">
                            <h4><a href="{{route('spondylosis')}}">Spondylosis</a></h4>
                        </div>
                        <p>Spondylosis is common and worsens with age. </p>
                        <div class="read-more-btn">
                            <a href="{{route('spondylosis')}}">
                                <svg width="43" height="10" viewBox="0 0 43 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H41" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M36 9L41 5L36 1" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                                Read More
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-12 mt-5">
                <div class="blog-wrrap d-flex">
                    <div class="blog-img">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/services/nerve-repair.jpg')}}" alt="nerve-repair">
                    </div>
                    <div class="blog-content">
                        <div class="blog-title">
                            <h4><a href="{{route('nerve-repair')}}">Nerve Repair</a></h4>
                        </div>
                        <p>Peripheral Nerve Injuries are one of the most common causes of hand dysfunction.</p>
                        <div class="read-more-btn">
                            <a href="{{route('nerve-repair')}}">  
                                <svg width="43" height="10" viewBox="0 0 43 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H41" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M36 9L41 5L36 1" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                                Read More
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-12 mt-5">    
                <div class="blog-wrrap d-flex">
                    <div class="blog-img">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/services/nerve-entrapment-surgery.jpg')}}" alt="nerve-entrapment-surgery">
                    </div>
                    <div class="blog-content">
                        <div class="blog-title">
                            <h4><a href="{{route('nerve-entrapment-surgery')}}">Nerve Entrapment Surgery</a></h4>
                        </div>
                        <p>Nerve entrapment when a nerve is compressed by surrounding tissues.</p>
                        <div class="read-more-btn">
                            <a href="{{route('nerve-entrapment-surgery')}}">
                                <svg width="43" height="10" viewBox="0 0 43 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H41" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M36 9L41 5L36 1" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                                Read More
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div> 

<!-- Mission Vision Values Section -->
<!-- <section class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="team-m">
                    <span class="t-img">
                        <img src="{{ asset('/resources/assets/images/icon/vision.png')}}" alt="vision">
                    </span>
                    <div class="n-d">
                        <h3>Vision</h3>
                        <p>Providing affordable access to Neurology, Neurosurgery, and Rehabilitation services for everyone in need.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-lg-5 mt-md-0 mt-5">
                <div class="team-m">
                    <span class="t-img">
                        <img src="{{ asset('/resources/assets/images/icon/mission.png')}}" alt="mission">
                    </span>
                    <div class="n-d">
                        <h3>Mission</h3>
                        <p>A round-the-clock team of Neurosurgeons, Neurologists, Rehabilitation specialists, Nurses, and Technical staff ensures top-notch patient care and outcomes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-md-5 mt-5">
                <div class="team-m">
                    <span class="t-img">
                        <img src="{{ asset('/resources/assets/images/icon/values.png')}}" alt="values">
                    </span>
                    <div class="n-d">
                        <h3>Values</h3>
                        <p>In the realm of neurosurgery, the intersection of ethics, morality, and values constitutes a critical imperative.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->  

<div class="space-top"></div> 

<!-- Why Choose Us section -->
<section class="sec-why-us">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-6">
                <div class="section-title-4">
                    <h4 class="mb-0">Why Choose</h4>
                    <h2>Dr. Adam Kamrudeen</h2>
                    <p>Experienced in Neurotrauma, emergency neurosurgeries, and spine surgeries, he's a top Neurosurgeon and Spine Surgeon in Navi Mumbai.</p>
                    <div class="single-widget widget-recentpost">
                        <ul style="padding-left:unset;">
                            <li>
                                <a href="#" class="widget-recentpost-image">
                                    <img src="{{ asset('/resources/assets/images/icon/best-counselling-icon.png')}}" alt="best-counselling-icon">
                                </a>
                                <div class="widget-recentpost-content">
                                    <h6><a href="">Best Counselling</a></h6>
                                    <span>We offer top-notch counseling and therapy services specializing in Brain and Spine disorders.</span>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="widget-recentpost-image">
                                    <img src="{{ asset('/resources/assets/images/icon/brain-checkup-icon.png')}}" alt="brain-checkup-icon">
                                </a>
                                <div class="widget-recentpost-content">
                                    <h6><a href="">Brain Checkup</a></h6>
                                    <span>Comprehensive Brain Health Assessment using advanced imaging techniques such as CT, CTA, MRI, MRA, DSA, or Carotid Artery Ultrasound/Doppler study.</span>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="widget-recentpost-image">
                                    <img src="{{ asset('/resources/assets/images/icon/experienced-doctor-icon.png')}}" alt="experienced-doctor-icon">
                                </a>
                                <div class="widget-recentpost-content">
                                    <h6><a href="">Experienced Doctor</a></h6>
                                    <span>A seasoned healthcare professional dedicated to patient care, adept at diagnosing, treating, and effectively managing various illnesses and conditions with a strong focus on trust and compassion.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('/resources/assets/images/shape-2.png')}}" alt="shape-2" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div> 

<!-- Counter Design -->
<div class="home-one-video">
    <div class="video-area">
        <div class="our-activitys">
            <div class="booking counter-item d-flex align-items-center">
                <div class="number counter">
                    <h2 class="odometer odometer-auto-theme" data-odometer-final="1300"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></h2>
                </div>
                <div class="contents">
                    <p>Brain <br>Surgery</p>
                </div>
            </div>
            <div class="visitors counter-item d-flex align-items-center">
                <div class="number counter">
                    <h2 class="odometer odometer-auto-theme" data-odometer-final="1100"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></h2>
                </div>
                <div class="contents">
                    <p>Spine <br>Surgery</p>
                </div>
            </div>
            <div class="satisfied-gest counter-item d-flex align-items-center">
                <div class="number counter d-flex align-items-center">
                    <h2 class="odometer odometer-auto-theme" data-odometer-final="20"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-formatting-mark odometer-radix-mark">.</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></h2>
                    <span>Years</span>
                </div>
                <div class="contents">
                    <p>Experience</p>
                </div>
            </div>
        </div>
    </div>
</div>     

<!-- Gallery Design -->
<div class="home-one-gallery two mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title1 text-center">
                    <h2>Gallery</h2>
                </div>
            </div>
        </div>
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
        </div>
    </div>
</div>

<div class="space-top"></div> 

<!-- testimonial Design -->
<div class="home-two-testimonial">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="section-title2 text-center"> 
                    <h2>Testimonial</h2>
                </div>
            </div>
        </div>
        <div class="row position-relative ">
            <div class="swiper testimonial-slider2">
                <div class="swiper-wrapper">
                    <!-- 1st slide -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrrap text-center">
                            <div class="author-name-deg">
                                <h4>Archana More</h4>
                                <span>Patient's Daughter</span>
                            </div>
                            <p>He is well experienced and the best in his profession.. saved my mom's life and also took care of all the need personally even after discharge and after a year too... God bless him</p>
                            <div class="author-img-rating">
                                <ul class="stars d-flex align-items-center justify-content-center">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd slide -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrrap text-center">  
                            <div class="author-name-deg">
                                <h4>Kanika Talreja</h4>
                                <span>Patient</span>
                            </div>
                            <p>I visited for my prolonged migraine problem. He listened to my issue and explained everything very politely. Guided me how to deal with the disease. After taking 2 months of treatment, i am much better now.</p>
                            <div class="author-img-rating">
                                <ul class="stars d-flex align-items-center justify-content-center">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 3rd slide -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrrap text-center">  
                            <div class="author-name-deg">
                                <h4>Neha Vasandani</h4>
                                <span>Patient's Daughter</span>
                            </div>
                            <p>Dr. Adam is a very good doctor. He operated my mother who was suffering with brain injury. He is a very calm and composed doctor and very reachable. Thanks doctor for giving my mother a second life.</p>
                            <div class="author-img-rating">
                                <ul class="stars d-flex align-items-center justify-content-center">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 4th slide -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrrap text-center">  
                            <div class="author-name-deg">
                                <h4>Dr. Sachchi Rai</h4>
                                <span>Patient</span>
                            </div>
                            <p>Came for head injury.......did very surgery at late hour of night and save my son. Thanks dr adam</p>
                            <div class="author-img-rating">
                                <ul class="stars d-flex align-items-center justify-content-center">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 5th slide -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrrap text-center">  
                            <div class="author-name-deg">
                                <h4>Hareram Singh</h4>
                                <span>Patient's Husband</span>
                            </div>
                            <p>My wife got brain haemorrhage and Dr. Adam attended immediately, operated and today she is surviving with grace of his exceptional skill, medical expertise and all accommodating attitude. Kudos to Dr. Adam for his family like behavior and personalized attention giving the life to near and dear ones.</p>
                            <div class="author-img-rating">
                                <ul class="stars d-flex align-items-center justify-content-center">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 6th slide -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrrap text-center">  
                            <div class="author-name-deg">
                                <h4>Ruchi Srivastava</h4>
                                <span>Patient's Sister</span>
                            </div>
                            <p>Doctor Adam is a very knowledgeable. He gave his expert advice when my brother was in a critical state last year due to brain injuries. He is one stop person for getting expert advices. Thanks a lot to him from the core of my heart for saving my brother!!</p>
                            <div class="author-img-rating">
                                <ul class="stars d-flex align-items-center justify-content-center">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 7th slide -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrrap text-center">  
                            <div class="author-name-deg">
                                <h4>Vikash Priyadarshi</h4>
                                <span>Patient's Relative</span>
                            </div>
                            <p>He is very knowledgeable and friendly doctor. Last year, my brother in law met with an accident and had serious internal brain injuries. He gave his expert advice to us and came as an Angel for his life. Thanks a lot to him!!</p>
                            <div class="author-img-rating">
                                <ul class="stars d-flex align-items-center justify-content-center">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 8th slide -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrrap text-center">  
                            <div class="author-name-deg">
                                <h4>Asiya Patel</h4>
                                <span>Patient's Daughter</span>
                            </div>
                            <p>Great and  Excellent Neurosurgeon, Thanks a lot sir, You are The Best, My Father is speaking now after surgery. You are the Best and vital Asset for MGM. God Bless You</p>
                            <div class="author-img-rating">
                                <ul class="stars d-flex align-items-center justify-content-center">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="swiper-btn d-flex align-items-center justify-content-between">
                <div class="btns swiper-button-prev-g">
                    <svg width="26" height="13" viewBox="0 0 26 13" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26821 12.5247C7.57342 12.4319 7.74572 12.1194 7.66696 11.807C7.64727 11.7142 6.82514 10.8695 5.21536 9.26803L2.79823 6.86094L14.1996 6.85117L25.6059 6.83652L25.7437 6.73399C25.8176 6.68028 25.916 6.54357 25.9554 6.43127C26.0194 6.25062 26.0145 6.21156 25.9407 6.0602C25.8964 5.96743 25.7979 5.85025 25.7241 5.80143C25.5961 5.71842 25.0693 5.71354 14.1947 5.69889L2.79823 5.68913L5.19075 3.30645C6.51008 1.99793 7.6128 0.865182 7.63742 0.791944C7.76049 0.474579 7.63742 0.176744 7.3322 0.0497979C6.9876 -0.0917957 7.05652 -0.150386 3.8468 3.03791C1.82843 5.03976 0.843853 6.05044 0.824161 6.14321C0.80447 6.21645 0.80447 6.33363 0.824161 6.41175C0.843853 6.49964 1.8235 7.50544 3.81727 9.49263C6.34763 12.0071 6.9876 12.6077 7.11067 12.5686C7.12052 12.5686 7.18944 12.5442 7.26821 12.5247Z" />
                    </svg>
                </div>
                <div class="btns swiper-button-next-g">
                    <svg width="26" height="14" viewBox="0 0 26 14" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.0947 0.759911C18.7901 0.852686 18.6181 1.16519 18.6967 1.47769C18.7164 1.57046 19.5369 2.4152 21.1437 4.01677L23.5562 6.42402L12.1765 6.43379L0.791783 6.44844L0.654204 6.55098C0.580501 6.60469 0.48223 6.74141 0.442921 6.85372C0.379045 7.03438 0.383959 7.07344 0.457662 7.22481C0.501884 7.31759 0.600155 7.43477 0.673858 7.4836C0.80161 7.56661 1.32736 7.57149 12.1814 7.58614L23.5562 7.59591L21.1682 9.97874C19.8514 11.2873 18.7508 12.4202 18.7262 12.4934C18.6034 12.8108 18.7262 13.1086 19.0309 13.2356C19.3748 13.3772 19.306 13.4358 22.5096 10.2473C24.5242 8.24532 25.5069 7.23457 25.5266 7.1418C25.5462 7.06856 25.5462 6.95137 25.5266 6.87324C25.5069 6.78535 24.5291 5.77948 22.5391 3.79216C20.0136 1.27749 19.3748 0.676902 19.252 0.715965C19.2421 0.715965 19.1733 0.74038 19.0947 0.759911Z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-top"></div>     

<!-- Consulting Hospital Design -->
<div class="home-one-gallery two">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title1 text-center">
                    <h2>Hospital Attachments</h2>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="ft-testimonial-item-innerbox">
                    <div class="ft-testimonial-item-img-wrapper position-relative">
                        <div class="ft-testimonial-item-img">
                            <img src="{{ asset('/resources/assets/images/hospital-logo.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="ft-testimonial-text-item text-center">
                        <h3>Health Express</h3>
                        <p><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Monday to Saturday</p>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>6:00pm to 8:00pm (On Call)</p>
                        <p><i class="fa fa-ambulance" aria-hidden="true"></i>Sunday (Emergency Only)</p>
                        <a href="https://maps.app.goo.gl/EJefYdEWr34ckmCY9" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>Address:  HL Diagnostics, Tricity Palacio, Shop no. 3&4, near D-Mart, Plot no. 5, Sector 38, Seawoods (W), Navi Mumbai - 400706</a>
                    </div>
				</div>    
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ft-testimonial-item-innerbox">
                    <div class="ft-testimonial-item-img-wrapper position-relative">
                        <div class="ft-testimonial-item-img">
                            <img src="{{ asset('/resources/assets/images/MGM-hospital-vashi-logo.png')}}" alt="MGM-hospital-vashi-logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="ft-testimonial-text-item text-center">
                        <h3>MGM Hospital</h3>
                        <p><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Monday to Saturday</p>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>9:00am to 5:00pm</p>
                        <p><i class="fa fa-ambulance" aria-hidden="true"></i>Sunday (Emergency Only)</p>
                        <a href="https://maps.app.goo.gl/v8Aitih3ZwaU9yUk9" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>Address:  MGM Hospital, Plot no. 35, Sector 3, Vashi, Navi Mumbai - 400703</a>
                    </div>
				</div>    
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ft-testimonial-item-innerbox">
                    <div class="ft-testimonial-item-img-wrapper position-relative">
                        <div class="ft-testimonial-item-img">
                            <img src="{{ asset('/resources/assets/images/hospital-logo.png')}}" alt="neurological-society-of-india" class="img-fluid">
                        </div>
                    </div>
                    <div class="ft-testimonial-text-item text-center">
                        <h3>Om Sai Hospital</h3>
                        <p><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Monday to Saturday</p>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>6:00pm to 8:00pm (On Call)</p>
                        <p><i class="fa fa-ambulance" aria-hidden="true"></i>Sunday (Emergency Only)</p>
                        <a href="https://maps.app.goo.gl/FS1q514MotAr19ax8" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>Address:  Om Sai Hospital, Plot no. 171, Sector 19, Ulwe, Navi Mumbai - 410206</a>
                    </div>
				</div>    
            </div>
        </div>
    </div>
</div>

<div class="space-top"></div>

@stop