@php($title = "Disc Prolapse Treatment | Dr. Adam Kamrudeen Navi Mumbai")  
@section('meta_desc')Discover effective treatment for disc prolapse with Dr. Adam Kamrudeen in Navi Mumbai. Trust in expert care for spinal health. @endsection
@extends('layouts.default')            
@section('content')                

<div class="breadcrumb-section breadcrumb-section-spine">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center text-center">
            <div class="col-lg-12 col-md-12 col-12">
                <h2 class="breadcrumb-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s;">Disc Prolapse</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Disc Prolapse</li>
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
                    <h1>Disc Prolapse</h1>
                    <img src="{{ asset('/resources/assets/images/services/disc-prolapse-inner-image.jpg')}}" alt="disc-prolapse-inner-image" class="img-fluid">
                    <div class="serv-space-top"></div>
                    <p>Disc prolapse, commonly referred to as a slipped disc or herniated disc, is a medical condition that occurs when the soft inner core of a spinal disc bulges out through a tear or weakened area in the tough outer layer. These discs act as cushions between the vertebrae of the spine, providing flexibility and shock absorption.</p>   
                    <p>When a disc prolapses, it can put pressure on nearby nerves, leading to symptoms such as:</p>
                    <p><b>Pain:</b>This can range from mild to severe and may occur in the back, neck, or other areas where the affected nerve travels, such as the arms or legs.</p>       
                    <p><b>Numbness or tingling:</b>These sensations can occur in the affected area.</p> 
                    <p><b>Muscle weakness:</b>Weakness in the muscles served by the affected nerves may occur, leading to difficulty in performing certain movements or tasks.</p>
                    <p>The exact cause of disc prolapse can vary but often involves factors such as aging, wear and tear on the spine, repetitive strain, or sudden injury. Treatment options depend on the severity of symptoms and may include rest, physical therapy, pain management techniques, and in some cases, surgery to remove or repair the affected disc.</p>   
                    <p>It's important for individuals experiencing symptoms of disc prolapse to seek medical attention for an accurate diagnosis and appropriate treatment plan.</p>
                </div>
            </div>      

        </div>
    </div>
</div>      

<div class="space-top"></div>  

@stop