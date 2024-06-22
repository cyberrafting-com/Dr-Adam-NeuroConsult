@php($title = "Top Neurosurgeon | Dr. Adam Kamrudeen in Navi Mumbai")  
@section('meta_desc')Seeking the best neurosurgeon in Navi Mumbai? Discover Dr. Adam Kamrudeen's expertise for exceptional care. Schedule a consultation today.@endsection
@extends('layouts.default')            
@section('content')                         

<div class="breadcrumb-section">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center text-center">
            <div class="col-lg-8">
                <h2 class="breadcrumb-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s;">About Us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>   
</div>

<div class="space-top"></div>

<!-- About section -->
<section class="about-us" id="start">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-md-0 mt-0">        
                <div class="about-text-box">        
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
                    <img class="img-box img-fluid" src="{{ asset('/resources/assets/images/dr-adam-pic-about-page.jpg')}}" style="box-shadow: 16px 16px 0px 0px rgb(53 167 135);">
                </div>                
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div>      

<!-- Award section -->
<div class="home-three-latest-post mt-5 sec-award">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7 col-md-7 col-12">
                <div class="latest-post-wraper">
                    <div class="post-img-publish-date">
                        <div class="publish-date"></div>
                    </div>
                    <div class="content content1">
                        <div class="blog-title">
                            <h3>Awards and Recognitions</h3>
                            <span>PAPER PRESENTAION IN ASICON - 2010</span><br>
                            <span>PAPER PRESENTATION IN NEUROVASCON - 2014</span><br>
                            <span>fellowship programme in brain endoscopy - 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12">
                <div class="latest-post-wraper">
                    <div class="post-img-publish-date">
                        <div class="publish-date"></div>
                    </div>
                    <div class="content content1">
                        <div class="blog-title">
                            <h3>Memberships</h3>
                            <span>Neurological Society of India</span><br>
                            <span>Indian Medical Association (IMA)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 d-flex justify-content-center mt-lg-5 mt-md-5 mt-0">
            <div class="col-lg-9 col-md-9 col-12">
                <div class="latest-post-wraper">
                    <div class="post-img-publish-date">
                        <div class="publish-date"></div>
                    </div>
                    <div class="content content1">
                        <div class="blog-title">  
                            <h3>Education</h3>
                            <span>MBBS - JMF'S ACPM Medical college, 2004</span><br>
                            <span>MS - General Surgery - Sarojini Naidu Medical College , Agra, 2011</span><br>
                            <span>MCh - Neuro Surgery - Sree Chitra Tirunal Institute for Medical Sciences & Technology, Trivandrum, 2015</span>
                        </div>
                    </div>
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
                    <h2>Affiliations</h2>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="ft-testimonial-item-innerbox">
                    <div class="ft-testimonial-item-img-wrapper position-relative">
                        <div class="ft-testimonial-item-img">
                            <img src="{{ asset('/resources/assets/images/indian-medical-association-logo.jpg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <!-- <div class="ft-testimonial-text-item text-center">
                        Lorem ipsum dolor sit amet, consectetur gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div> -->
                    <div class="ft-testimonial-name headline position-relative">
                        <h3>indian medical association</h3>
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
                    <!-- <div class="ft-testimonial-text-item text-center">
                        Lorem ipsum dolor sit amet, consectetur gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div> -->
                    <div class="ft-testimonial-name headline position-relative">
                        <h3>MGM Hospital Vashi</h3>
                    </div>
				</div>    
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ft-testimonial-item-innerbox">
                    <div class="ft-testimonial-item-img-wrapper position-relative">
                        <div class="ft-testimonial-item-img">
                            <img src="{{ asset('/resources/assets/images/neurological-society-of-india.png')}}" alt="neurological-society-of-india" class="img-fluid">
                        </div>
                    </div>
                    <!-- <div class="ft-testimonial-text-item text-center">
                        Lorem ipsum dolor sit amet, consectetur gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div> -->
                    <div class="ft-testimonial-name headline position-relative">
                        <h3>Neurological Society of India</h3>
                    </div>
				</div>    
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5 g-4">
            <div class="col-lg-4 col-md-6">
                <div class="ft-testimonial-item-innerbox">
                    <div class="ft-testimonial-item-img-wrapper position-relative">
                        <div class="ft-testimonial-item-img">
                            <img src="{{ asset('/resources/assets/images/sree-chitra-tirunal-institute-for-medical-sciences-logo.png')}}" alt="sree-chitra-tirunal-institute-for-medical-sciences-logo" class="img-fluid">
                        </div>
                    </div>
                    <!-- <div class="ft-testimonial-text-item text-center">
                        Lorem ipsum dolor sit amet, consectetur gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div> -->
                    <div class="ft-testimonial-name ft-testimonial-name1 headline position-relative">
                        <h3>Sree Chitra Tirunal Institute for Medical Sciences and Technology</h3>
                    </div>
				</div>    
            </div>
        </div>
    </div>
</div>

<div class="space-top"></div>

@stop