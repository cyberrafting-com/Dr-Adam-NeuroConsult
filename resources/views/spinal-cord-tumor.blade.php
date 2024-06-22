@php($title = "Spinal Cord Tumor Care | Dr. Adam Kamrudeen Navi Mumbai")  
@section('meta_desc')Trust Dr. Adam Kamrudeen for expert spinal cord tumor care in Navi Mumbai. Comprehensive treatment for optimal recovery. @endsection
@extends('layouts.default')            
@section('content')                

<div class="breadcrumb-section breadcrumb-section-spine">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center text-center">
            <div class="col-lg-12 col-md-12 col-12">
                <h2 class="breadcrumb-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s;">Spinal Cord Tumor</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Spinal Cord Tumor</li>
                    </ol>             
                </nav>  
            </div>
        </div>
    </div>    
</div>  

<div class="space-top"></div>

<div class="service-detials-area">
    <div class="container">
        <div class="row">          

            <div class="col-lg-4 col-md-12 col-12">
                @include('includes.spine-surgery-sidebar')    
            </div>

            <div class="col-lg-8 col-md-12 col-12 cat-service-detials-bg">
                <div class="cat-service-detials">
                    <h1>Spinal Cord Tumor</h1>
                    <img src="{{ asset('/resources/assets/images/services/spinal-cord-tumor-inner-image.jpg')}}" alt="spinal-cord-tumor-inner-image" class="img-fluid">
                    <div class="serv-space-top"></div>
                    <p>A spinal cord tumor is an abnormal growth of cells within or surrounding the spinal cord. These tumors can either originate from the spinal cord itself (intradural) or from surrounding structures such as the bones, soft tissues, or blood vessels (extradural). They can be benign (non-cancerous) or malignant (cancerous).</p>   
                    <p>Symptoms of a spinal cord tumor may vary depending on its size, location, and rate of growth. Common symptoms include:</p>
                    <p><b>Back pain:</b>Persistent or worsening pain in the back or neck, often localized to the site of the tumor.</p>       
                    <p><b>Weakness or numbness:</b>Weakness or numbness in the arms, legs, or trunk, which may progress over time.</p> 
                    <p><b>Loss of sensation:</b>Decreased sensation or altered sensation in the limbs or trunk.</p>
                    <p><b>Difficulty walking:</b>Changes in gait or difficulty walking due to weakness or loss of coordination.</p> 
                    <p><b>Bowel or bladder dysfunction:</b>Incontinence or difficulty controlling bowel or bladder function.</p>     
                    <p><b>Muscle spasms or stiffness:</b>Spasms or increased muscle tone, sometimes associated with pain or discomfort.</p>     
                    <p><b>Paralysis:</b>In severe cases, paralysis may occur, particularly if the tumor compresses the spinal cord extensively.</p>   
                    <p>Diagnosis typically involves imaging studies such as MRI or CT scans to visualize the tumor and determine its location and size. A biopsy may be performed to determine whether the tumor is benign or malignant.</p> 
                    <p>Treatment options for spinal cord tumors vary and may include:</p>
                    <p><b>Surgery:</b>Surgical removal of the tumor may be possible, especially if it's benign and located in a surgically accessible area.</p>   
                    <p><b>Radiation therapy:</b>Radiation may be used to shrink or control the growth of the tumor, either as a primary treatment or following surgery.</p> 
                    <p><b>Chemotherapy:</b>Chemotherapy may be used for certain types of malignant tumors that are responsive to chemotherapy drugs.</p>
                    <p><b>Steroids:</b>Steroids may be prescribed to reduce inflammation and swelling around the tumor, relieving symptoms such as pain and neurological deficits.</p> 
                    <p><b>Supportive care:</b>Physical therapy, occupational therapy, and other supportive measures may be recommended to help manage symptoms and improve quality of life.</p>     
                    <p>The prognosis for spinal cord tumors varies depending on factors such as the type of tumor, its location, and the effectiveness of treatment. Benign tumors generally have a better prognosis than malignant ones, although outcomes can vary widely. Prompt diagnosis and appropriate treatment are important for optimizing outcomes and quality of life for individuals with spinal cord tumors.</p>
                </div>
            </div>      

        </div>
    </div>
</div>      

<div class="space-top"></div>  

@stop