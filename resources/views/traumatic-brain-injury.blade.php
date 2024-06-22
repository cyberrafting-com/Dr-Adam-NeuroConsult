@php($title = "Traumatic Brain Injury Care | Dr. Adam Kamrudeen Navi Mumbai")  
@section('meta_desc')Expert treatment for SDH, EDH, ICH & traumatic brain injury by Dr. Adam Kamrudeen in Navi Mumbai. Trust in specialized care for optimal recovery. @endsection
@extends('layouts.default')            
@section('content')                

<div class="breadcrumb-section">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center text-center">
            <div class="col-lg-12 col-md-12 col-12">
                <h2 class="breadcrumb-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s;">Traumatic Brain Injury(SDH, EDH, ICH)</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Traumatic Brain Injury(SDH, EDH, ICH)</li>
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
                    <h1>Traumatic Brain Injury(SDH, EDH, ICH)</h1>
                    <img src="{{ asset('/resources/assets/images/services/traumatic-brain-injury-inner-image.jpg')}}" alt="traumatic-brain-injury-inner-image" class="img-fluid">
                    <div class="serv-space-top"></div>
                    <p>A traumatic brain injury (TBI) occurs when the brain experiences disruption in its normal function due to either a blow to the head or a penetrating injury to the skull, which can happen from sudden and forceful impact such as in road traffic accidents or when an object penetrates the skull and enters brain tissue. The severity of TBI can range from mild, resulting in brief changes in mental state or consciousness, to moderate or severe cases which may lead to extended periods of unconsciousness, coma, or even death. Symptoms of TBI, which can include vomiting, lethargy, headache, confusion, paralysis, and coma, vary widely depending on the extent of the head injury.</p>  
                    <p>In cases where the patient's clinical condition, assessed by the Glasgow Coma Scale, indicates significant risk to the underlying brain, urgent surgical intervention may be necessary to mitigate potential damage. Surgical procedures may be undertaken to address the following issues:</p>
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Hematomas, whether extradural or subdural.</p>
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Repairing depressed fractures that compress the underlying brain.</p>
                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Alleviating elevated intracranial pressure caused by brain edema or hemorrhage through bone flap removal or performing burr hole evacuation of clot.</p>
                </div>
            </div>  

        </div>
    </div>
</div>      

<div class="space-top"></div>  

@stop