@php($title = "Expert Vascular Disease Care | Dr. Adam Kamrudeen Navi Mumbai")  
@section('meta_desc')Find expert treatment for stroke, paralysis, AVM, and aneurysm with Dr. Adam Kamrudeen in Navi Mumbai. Trust in specialized vascular care. @endsection
@extends('layouts.default')            
@section('content')                

<div class="breadcrumb-section">   
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center text-center">
            <div class="col-lg-12 col-md-12 col-12">
                <h2 class="breadcrumb-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s;">Vascular Disease</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vascular Disease</li>
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
                @include('includes.brain-surgery-sidebar')    
            </div>

            <div class="col-lg-8 col-md-12 col-12 cat-service-detials-bg">
                <div class="cat-service-detials">
                    <h1>Vascular Disease</h1>
                    <img src="{{ asset('/resources/assets/images/services/vascular-disease-inner-image.jpg')}}" alt="vascular-disease-inner-image" class="img-fluid">
                    <div class="serv-space-top"></div>
                    <p>Vascular diseases refer to conditions that affect the blood vessels, impacting the flow of blood throughout the body. Among the most significant vascular diseases are stroke, arteriovenous malformations (AVMs), and aneurysms. Each of these conditions presents unique challenges and requires prompt medical attention for proper management and treatment.</p>
                    <h2>Stroke/Paralysis</h2>    
                    <p>A stroke occurs when there is a sudden interruption of blood flow to the brain, leading to the death of brain cells. This interruption can be caused by a blockage in a blood vessel (ischemic stroke) or the rupture of a blood vessel (hemorrhagic stroke). The effects of a stroke can be devastating, often leading to paralysis, speech difficulties, and cognitive impairment.</p>
                    <h2>Symptoms of stroke:</h2>
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Sudden numbness or weakness in the face, arm, or leg, especially on one side of the body.</p> 
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Difficulty speaking or understanding speech.</p> 
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Sudden vision problems.</p> 
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Severe headache with no known cause.</p>   
                    <h2>Prevention and Treatment</h2>
                    <p>Prompt treatment is crucial for minimizing the damage caused by a stroke. This often involves medications to dissolve blood clots (in the case of an ischemic stroke) or surgery to repair ruptured blood vessels (in the case of a hemorrhagic stroke). Prevention strategies include managing risk factors such as high blood pressure, diabetes, and smoking.</p>
                    <h2>Arteriovenous Malformation (AVM)</h2>
                    <p>An AVM is an abnormal tangle of blood vessels connecting arteries and veins, bypassing the capillary system. This can disrupt normal blood flow and lead to various complications, including bleeding, seizures, and neurological deficits.</p>
                    <h2>Symptoms of AVM</h2>
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Headaches.</p>
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Seizures.</p>
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Muscle weakness or paralysis.</p>
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Visual disturbances.</p>
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Difficulty speaking or understanding speech.</p>
                    <h2>Prevention and Treatment</h2>
                    <p>The treatment of AVM depends on its size, location, and symptoms. Options include embolization (blocking the abnormal blood vessels), surgery to remove the AVM, or stereotactic radiosurgery (focused radiation therapy). Regular monitoring and management of symptoms are essential to prevent complications.</p>   
                    <h2>Aneurysm</h2>
                    <p>An aneurysm is a bulge or ballooning in a blood vessel caused by weakness in the vessel wall. Aneurysms can occur in various parts of the body, but they are particularly dangerous when they develop in the brain (cerebral aneurysm) or aorta (aortic aneurysm), as they can rupture and cause life-threatening bleeding.</p> 
                    <h2>Symptoms of Aneurysm</h2>
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Sudden, severe headache.</p> 
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Nausea and vomiting.</p>
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Stiff neck.</p>
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Blurred or double vision.</p>
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Loss of consciousness.</p> 
                    <h2>Prevention and Treatment</h2>
                    <p>Preventive measures for aneurysms include managing high blood pressure, avoiding tobacco use, and maintaining a healthy lifestyle. Treatment options depend on the size and location of the aneurysm and may include surgical clipping, endovascular coiling, or stent placement to reinforce the weakened blood vessel wall.</p> 
                    <p>In conclusion, vascular diseases such as stroke, AVM, and aneurysm require comprehensive management and treatment to minimize complications and improve outcomes. Early recognition of symptoms and timely intervention are critical for reducing the risk of long-term disability and mortality associated with these conditions. If you or someone you know experiences symptoms suggestive of a vascular disease, seek medical attention immediately.</p>
                </div>
            </div>           
        </div>
    </div>
</div>            

<div class="space-top"></div>  

@stop