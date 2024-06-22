@php($title = "Contact | Dr. Adam Kamrudeen Navi Mumbai")  
@section('meta_desc')Reach out to Dr. Adam Kamrudeen in Navi Mumbai. Get in touch for expert neurosurgical consultation and appointments. @endsection
@extends('layouts.default')            
@section('content')                

<div class="breadcrumb-section">   
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center text-center">
            <div class="col-lg-12 col-md-12 col-12">
                <h2 class="breadcrumb-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s;">Contact</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>             
                </nav>  
            </div>
        </div>
    </div>    
</div>      

<div class="space-top"></div>
  
<!-- contact design -->
<section>
    <div class="container">
        <div class="row contact-page">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="single-contact mb-40">
                    <div class="title">
                        <h6>Phone</h6>
                    </div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M19.4752 15.4282L15.4271 12.7286C14.9134 12.3888 14.2248 12.5006 13.845 12.9856L12.6658 14.5017C12.5925 14.5983 12.4868 14.6653 12.3681 14.6903C12.2494 14.7153 12.1257 14.6966 12.0196 14.6377L11.7953 14.514C11.0518 14.1087 10.1266 13.6042 8.26252 11.7394C6.39846 9.87471 5.89287 8.94884 5.48757 8.20664L5.36458 7.98234C5.30488 7.87632 5.28549 7.75231 5.30998 7.63313C5.33448 7.51395 5.40121 7.40763 5.49789 7.33376L7.01297 6.15495C7.49775 5.77512 7.60972 5.08671 7.27028 4.57284L4.57068 0.524768C4.2228 0.00148647 3.52486 -0.1556 2.9863 0.168141L1.29355 1.18498C0.761668 1.49766 0.371466 2.00408 0.204723 2.59809C-0.404835 4.81909 0.0537292 8.6522 5.70024 14.2994C10.1919 18.7907 13.5358 19.9985 15.8341 19.9985C16.363 20.0008 16.8899 19.932 17.4005 19.7939C17.9947 19.6274 18.5012 19.2371 18.8136 18.7051L19.8315 17.0133C20.1557 16.4747 19.9987 15.7763 19.4752 15.4282ZM19.2572 16.6714L18.2417 18.3641C18.0173 18.7481 17.653 19.0305 17.2252 19.152C15.1748 19.7149 11.5927 19.2487 6.17181 13.8278C0.750931 8.40692 0.284711 4.82511 0.847635 2.77444C0.969353 2.34604 1.25202 1.98132 1.6365 1.75658L3.32926 0.741065C3.56294 0.60046 3.86586 0.668614 4.01682 0.89569L5.48328 3.09736L6.71411 4.94341C6.86151 5.16631 6.81308 5.46505 6.6028 5.62999L5.08736 6.8088C4.62618 7.16144 4.49448 7.79951 4.77842 8.30592L4.89876 8.52456C5.32471 9.30578 5.85428 10.2776 7.78766 12.2107C9.72105 14.1437 10.6926 14.6733 11.4734 15.0993L11.6924 15.2199C12.1988 15.5038 12.8369 15.3721 13.1895 14.911L14.3683 13.3955C14.5333 13.1854 14.8319 13.137 15.0549 13.2842L19.1026 15.9838C19.3299 16.1346 19.398 16.4377 19.2572 16.6714ZM11.3327 3.33435C14.4604 3.33783 16.9951 5.87249 16.9986 9.0002C16.9986 9.18427 17.1478 9.33347 17.3318 9.33347C17.5159 9.33347 17.6651 9.18427 17.6651 9.0002C17.6612 5.5045 14.8284 2.67164 11.3327 2.66781C11.1487 2.66781 10.9995 2.81701 10.9995 3.00108C10.9995 3.18516 11.1487 3.33435 11.3327 3.33435Z"></path><path d="M11.3321 5.33353C13.3558 5.33592 14.9958 6.97591 14.9982 8.99967C14.9982 9.08806 15.0333 9.17283 15.0958 9.23533C15.1583 9.29783 15.2431 9.33294 15.3315 9.33294C15.4198 9.33294 15.5046 9.29783 15.5671 9.23533C15.6296 9.17283 15.6647 9.08806 15.6647 8.99967C15.662 6.60792 13.7238 4.66973 11.3321 4.66699C11.148 4.66699 10.9988 4.81619 10.9988 5.00026C10.9988 5.18434 11.148 5.33353 11.3321 5.33353Z"></path><path d="M11.3321 7.33353C12.2519 7.33463 12.9974 8.08006 12.9985 8.99997C12.9985 9.08836 13.0336 9.17313 13.0961 9.23563C13.1586 9.29813 13.2434 9.33324 13.3318 9.33324C13.4201 9.33324 13.5049 9.29813 13.5674 9.23563C13.6299 9.17313 13.665 9.08836 13.665 8.99997C13.6635 7.71211 12.6199 6.66844 11.3321 6.66699C11.148 6.66699 10.9988 6.81619 10.9988 7.00026C10.9988 7.18434 11.148 7.33353 11.3321 7.33353Z"></path></svg>
                    </div>
                    <div class="content">
                        <h6><a href="tel:+919820633484">+91-9820633484</a></h6>
                    </div>
                </div>
                <div class="single-contact mb-40">
                    <div class="title">
                        <h6>Email Now</h6>
                    </div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M19.9018 8.6153C19.5412 5.99522 18.1517 3.62536 16.0393 2.02707C13.9268 0.428777 11.2643 -0.267025 8.63745 0.0927308C6.01063 0.452486 3.63468 1.83833 2.03228 3.94539C0.42988 6.05245 -0.267711 8.70813 0.0929693 11.3282C0.388972 13.4966 1.38745 15.509 2.9363 17.0589C4.48516 18.6088 6.49948 19.6113 8.67243 19.9136C9.11786 19.9713 9.56656 20.0002 10.0157 20C11.8278 20.0033 13.606 19.5101 15.1563 18.5744C15.2358 18.5318 15.3058 18.4735 15.362 18.4031C15.4182 18.3326 15.4595 18.2516 15.4833 18.1648C15.5072 18.078 15.5131 17.9872 15.5007 17.8981C15.4884 17.8089 15.458 17.7232 15.4114 17.6461C15.3648 17.569 15.303 17.5021 15.2298 17.4496C15.1565 17.397 15.0733 17.3599 14.9853 17.3403C14.8972 17.3208 14.806 17.3193 14.7173 17.336C14.6287 17.3527 14.5443 17.3871 14.4694 17.4373C12.7129 18.4904 10.6392 18.8886 8.61629 18.5613C6.59339 18.2339 4.75224 17.2022 3.4197 15.6492C2.08717 14.0962 1.34948 12.1225 1.3376 10.0784C1.32573 8.03438 2.04043 6.05225 3.35483 4.48397C4.66923 2.91568 6.49828 1.86271 8.51723 1.512C10.5362 1.16129 12.6144 1.53554 14.383 2.56829C16.1515 3.60104 17.4959 5.22548 18.1776 7.1532C18.8592 9.08092 18.8338 11.1872 18.1061 13.0981C17.9873 13.4102 17.7626 13.6709 17.4711 13.8349C17.1795 13.999 16.8396 14.056 16.5104 13.996C16.1811 13.9361 15.8833 13.763 15.6687 13.5068C15.454 13.2506 15.3362 12.9275 15.3356 12.5936V5.37867C15.3356 5.2024 15.2654 5.03336 15.1404 4.90872C15.0155 4.78408 14.846 4.71406 14.6693 4.71406C14.4925 4.71406 14.3231 4.78408 14.1981 4.90872C14.0731 5.03336 14.0029 5.2024 14.0029 5.37867V6.52578C13.2819 5.70734 12.3261 5.12961 11.265 4.8708C10.204 4.61198 9.08877 4.68456 8.0704 5.07873C7.05203 5.47289 6.17966 6.16961 5.57134 7.07458C4.96303 7.97954 4.64814 9.04908 4.66929 10.1384C4.69045 11.2278 5.04663 12.2843 5.68962 13.1651C6.33262 14.0459 7.23139 14.7084 8.2643 15.0629C9.2972 15.4175 10.4144 15.4469 11.4646 15.1473C12.5149 14.8477 13.4475 14.2335 14.1362 13.3878C14.3015 13.9385 14.6358 14.4237 15.092 14.775C15.5482 15.1263 16.1033 15.326 16.6793 15.3461C17.2553 15.3662 17.8231 15.2057 18.3028 14.887C18.7825 14.5684 19.15 14.1078 19.3535 13.5699C19.9483 11.99 20.1368 10.2866 19.9018 8.6153ZM10.0051 14.0185C9.21436 14.0185 8.4414 13.7847 7.78396 13.3465C7.12651 12.9083 6.61409 12.2856 6.3115 11.5569C6.00891 10.8283 5.92974 10.0265 6.08399 9.25296C6.23825 8.47943 6.61902 7.7689 7.17813 7.21122C7.73724 6.65354 8.4496 6.27376 9.22511 6.1199C10.0006 5.96603 10.8045 6.045 11.535 6.34681C12.2655 6.64863 12.8899 7.15973 13.3292 7.8155C13.7685 8.47126 14.0029 9.24223 14.0029 10.0309C14.0019 11.0882 13.5803 12.1018 12.8308 12.8494C12.0813 13.597 11.065 14.0175 10.0051 14.0185Z"></path></svg>
                    </div>
                    <div class="content">
                        <h6><a href="mailto:consult@neuroconsult.co.in">consult@neuroconsult.co.in</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-12 p-0">
                <div class="appointment-form">      
                    <h2>Send Us Message</h2>              
                    @if(session('success'))
                    <p style="color: red;">{{ session('success') }}</p>
                    @endif
                    <form method="post" action="{{ route('saveContact') }}">
                    @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control form-control-lg" name="first_name" aria-describedby="name" placeholder="Enter Your Name" value="{{ old('first_name') }}">
                                    @error('name')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control form-control-lg" name="last_name" aria-describedby="name" placeholder="Enter Your Name" value="{{ old('last_name') }}">
                                    @error('name')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control form-control-lg" name="email" aria-describedby="email" placeholder="Enter email Id" value="{{ old('email') }}">
                                    @error('email')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Mobile No</label>
                                    <input type="tel" class="form-control form-control-lg" name="mobile" aria-describedby="mobile" placeholder="Enter Mobile No" value="{{ old('mobile') }}">
                                    @error('mobile')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>  
                            </div>      
                        </div>                   
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="4" name="message">{{ old('message') }}</textarea>
                            @error('message')
                            <p style="color: red;">{{ $message }}</p>
                            @enderror
                        </div>  
                        <button type="submit" class="btn mt-3 default-btn">Submit</button>
                    </form>   
                </div>
            </div>     
        </div>
    </div>
</section>

<div class="space-top"></div>  

<!-- Consulting Hospital Design -->
<div class="home-one-gallery">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title1 text-center">
                    <h2>Consulting Places</h2>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-5 col-12">
                <div class="ft-testimonial-item-innerbox">
                    <div class="ft-testimonial-item-img-wrapper position-relative">
                        <div class="ft-testimonial-item-img">
                            <img src="{{ asset('/resources/assets/images/hospital-logo.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="ft-testimonial-text-item">
                        <h3 class="text-center">Health Express</h3>
                        <p><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Monday to Saturday</p>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>6:00pm to 8:00pm (On Call)</p>
                        <p><i class="fa fa-ambulance" aria-hidden="true"></i>Sunday (Emergency Only)</p>
                        <a href="https://maps.app.goo.gl/EJefYdEWr34ckmCY9" target="_blank"><i class="fa fa-map-marker location-icon" aria-hidden="true"></i>Address:  HL Diagnostics, Tricity Palacio, Shop no. 3&4, near D-Mart, Plot no. 5, Sector 38, Seawoods (W), Navi Mumbai - 400706</a>
                    </div>
				</div>    
            </div>
            <div class="col-lg-8 col-md-7 col-12">
                <div class="contact-map">
                    <h4>Health Express Seawoods</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60352.14039725818!2d73.015288!3d19.019335!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3dc6789c68d%3A0x4956033184e21304!2sDr%20Adam%20Kamrudeen%20NEUROCONSULT%20-%20Best%20Neurosurgeon%20in%20Navi%20Mumbai%20%7C%20Brain%20%26%20Spine%20Surgeon%20in%20Navi%20Mumbai!5e0!3m2!1sen!2sin!4v1710856572483!5m2!1sen!2sin" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-5">
            <div class="col-lg-4 col-md-5 col-12">
                <div class="ft-testimonial-item-innerbox">
                    <div class="ft-testimonial-item-img-wrapper position-relative">
                        <div class="ft-testimonial-item-img">
                            <img src="{{ asset('/resources/assets/images/MGM-hospital-vashi-logo.png')}}" alt="MGM-hospital-vashi-logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="ft-testimonial-text-item">
                        <h3 class="text-center">MGM Hospital</h3>
                        <p><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Monday to Saturday</p>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>9:00am to 5:00pm</p>
                        <p><i class="fa fa-ambulance" aria-hidden="true"></i>Sunday (Emergency Only)</p>
                        <a href="https://maps.app.goo.gl/v8Aitih3ZwaU9yUk9" target="_blank"><i class="fa fa-map-marker location-icon" aria-hidden="true"></i>Address:  MGM Hospital, Plot no. 35, Sector 3, Vashi, Navi Mumbai - 400703</a>
                    </div>
				</div>    
            </div>
            <div class="col-lg-8 col-md-7 col-12">
                <div class="contact-map">
                    <h4>MGM Hospital Vashi</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30166.396189674528!2d72.993539!3d19.07255!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c1c92df367d7%3A0xa4e827dd02072588!2sDr%20Adam&#39;s%20NEUROCONSULT%20-%20BEST%20NEUROSURGEON%20in%20Navi%20Mumbai%2C%20Spine%20Specialist%20in%20Navi%20Mumbai%2C%20Neurologist%20Navi%20Mumbai!5e0!3m2!1sen!2sin!4v1710856615151!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-5">
            <div class="col-lg-4 col-md-5 col-12">
                <div class="ft-testimonial-item-innerbox">
                    <div class="ft-testimonial-item-img-wrapper position-relative">
                        <div class="ft-testimonial-item-img">
                            <img src="{{ asset('/resources/assets/images/hospital-logo.png')}}" alt="neurological-society-of-india" class="img-fluid">
                        </div>
                    </div>
                    <div class="ft-testimonial-text-item">
                        <h3 class="text-center">Om Sai Hospital</h3>
                        <p><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Monday to Saturday</p>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>6:00pm to 8:00pm (On Call)</p>
                        <p><i class="fa fa-ambulance" aria-hidden="true"></i>Sunday (Emergency Only)</p>
                        <a href="https://maps.app.goo.gl/FS1q514MotAr19ax8" target="_blank"><i class="fa fa-map-marker location-icon" aria-hidden="true"></i>Address:  Om Sai Hospital, Plot no. 171, Sector 19, Ulwe, Navi Mumbai - 410206</a>
                    </div>
				</div>    
            </div>
            <div class="col-lg-8 col-md-7 col-12">
                <div class="contact-map">
                    <h4>Om Sai Hospital Ulwe</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30184.51448640861!2d73.028562!3d18.972767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c378810d1caf%3A0x8247ddb0cff43507!2sUlwe%20-%20Dr.%20Adam%20Kamrudeen%2C%20Neurosurgeon%20in%20Ulwe%2C%20Navi%20Mumbai!5e0!3m2!1sen!2sus!4v1710856660797!5m2!1sen!2sus" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-top"></div> 

<!--<section class="mt-5 mb-5">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-4 col-md-4 col-12">-->
<!--                <div class="contact-map">-->
<!--                    <h4>Health Express Seawoods</h4>-->
<!--                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60352.14039725818!2d73.015288!3d19.019335!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3dc6789c68d%3A0x4956033184e21304!2sDr%20Adam%20Kamrudeen%20NEUROCONSULT%20-%20Best%20Neurosurgeon%20in%20Navi%20Mumbai%20%7C%20Brain%20%26%20Spine%20Surgeon%20in%20Navi%20Mumbai!5e0!3m2!1sen!2sin!4v1710856572483!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-4 col-12">-->
<!--                <div class="contact-map">-->
<!--                    <h4>MGM Hospital Vashi</h4>-->
<!--                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30166.396189674528!2d72.993539!3d19.07255!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c1c92df367d7%3A0xa4e827dd02072588!2sDr%20Adam&#39;s%20NEUROCONSULT%20-%20BEST%20NEUROSURGEON%20in%20Navi%20Mumbai%2C%20Spine%20Specialist%20in%20Navi%20Mumbai%2C%20Neurologist%20Navi%20Mumbai!5e0!3m2!1sen!2sin!4v1710856615151!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-4 col-12">-->
<!--                <div class="contact-map">-->
<!--                    <h4>Om Sai Hospital Ulwe</h4>-->
<!--                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30184.51448640861!2d73.028562!3d18.972767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c378810d1caf%3A0x8247ddb0cff43507!2sUlwe%20-%20Dr.%20Adam%20Kamrudeen%2C%20Neurosurgeon%20in%20Ulwe%2C%20Navi%20Mumbai!5e0!3m2!1sen!2sus!4v1710856660797!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

@stop