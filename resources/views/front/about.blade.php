
@php
    $setting = \App\Models\Setting::find(1);
@endphp

@extends('layouts.frontend')

@section('content')

@section('title')
    About Us
@endsection

@include('includes.pageHeader')

<div class="stricky-header stricked-menu main-menu main-menu-six">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Page Header Start-->
@include('includes.pageHeaderNav', ['header1'=>'About Us','header2'=>'About Us'])
<!--Page Header End-->

<!--About One Start -->
<section class="about-one about-seven">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="about-one__img wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="section-title text-left sec-title-animation animation-style1">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">ABOUT US</span>
                        </div>
                        <h2 class="section-title__title title-animation">
                            Welcome to First Class Builders Limited
                        </h2>
                    </div>
                    <p class="about-one__text">
                        First Class Builders Limited is a premier engineering construction company dedicated to delivering top-quality construction services. We specialize in building residential homes, commercial buildings, schools, hospitals, filling stations, and markets.
                    </p>
                    <ul class="about-one__points-list list-unstyled">
                        <li>
                            
                            <div class="content">
                                <h3><a href="#">Our Commitment</a></h3>
                                <p>We are committed to excellence, safety, and innovation in all our projects. Serving companies, corporate businesses, and governments, we tailor our services to meet the unique needs of each client.</p>
                            </div>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End -->

<!-- Counter Two Start -->
<section class="counter-two">
    <div class="counter-two__bg-box">
        <div class="counter-two__bg"
            style="background-image: url(assets/images/backgrounds/counter-two-bg.png);"></div>
    </div>
    <div class="container-fluid">
        <div class="counter-two__top">
            <div class="section-title text-left sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Why Choose Us?</span>
                </div>
                <h2 class="section-title__title title-animation">Why Choose Us?</h2>
            </div>
            <p class="counter-two__top-text">
                At First Class Builders Limited, we stand out in the engineering construction industry due to our unwavering commitment to quality, innovation, and customer satisfaction. Here's why you should choose us:
            </p>
        </div>
        <div class="counter-two__bottom">
            <div class="row">
                <!-- Counter Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-settings"></span>
                        </div>
                        <div class="counter-two__count count-box">
                            <h3 class="count-text">Expertise</h3>
                            {{-- <span class="counter-two__plus">+</span> --}}
                        </div>
                        <p class="counter-two__count-text">Years of industry experience.</p>
                    </div>
                </div>
                <!-- Counter Two Single End -->
                <!-- Counter Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-paint"></span>
                        </div>
                        <div class="counter-two__count count-box">
                            <h3 class="count-text">
                                Customer Focus
                            </h3>
                           
                        </div>
                        <p class="counter-two__count-text">
                            Personalized solutions for each client.
                        </p>
                    </div>
                </div>
                <!-- Counter Two Single End -->
                <!-- Counter Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="600ms">
                    <div class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-mechanic-2"></span>
                        </div>
                        <div class="counter-two__count count-box">
                            <h3 class="count-text">Innovation</h3>
                        </div>
                        <p class="counter-two__count-text">
                        Innovative construction technologies.
                        </p>
                    </div>
                </div>
                <!-- Counter Two Single End -->
                <!-- Counter Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="900ms">
                    <div class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-analytics"></span>
                        </div>
                        <div class="counter-two__count count-box">
                            <h3 class="count-text">
                                Sustainability
                            </h3>
                        </div>
                        <p class="counter-two__count-text">Eco-friendly building practices</p>
                    </div>
                </div>
                <!-- Counter Two Single End -->
            </div>
        </div>
    </div>
</section>
<!-- Counter Two End -->

<!--Contact Two Start -->
<section class="contact-two contact-four">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-two__left">
                    <div class="section-title text-left sec-title-animation animation-style1">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">talk to us</span>
                        </div>
                        <h2 class="section-title__title title-animation">We are open <br> for communication</h2>
                    </div>
                    <p class="contact-two__text">
                        At First Class Builders Limited, we value open communication and are here to assist you with all your construction needs. Whether you have a question about our services, need a consultation, or want to discuss your next project, we are ready to help.
                    </p>
                    <div class="contact-two__call-box">
                        <div class="icon">
                            <span class="icon-call"></span>
                        </div>
                        <div class="content">
                            <span>Need help?</span>
                            <p><a href="tel:+{{ $setting->phone }} ">{{ $setting->phone }} </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="contact-two__right">
                    <form action="#" class="contact-two__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-two__input-box">
                                    <input type="text" placeholder="Your Name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-two__input-box">
                                    <input type="email" placeholder="Your E-mail" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-two__input-box">
                                    <input type="text" placeholder="Your Phone" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-two__input-box">
                                    <input type="text" placeholder="Your Location" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="contact-two__input-box text-message-box">
                                    <textarea name="message" placeholder="Your Massage"></textarea>
                                </div>
                                <div class="contact-two__btn-box">
                                    <button type="submit" class="thm-btn contact-two__btn">Send us<span
                                            class="icon-dabble-arrow-right"></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Two End -->


<!--CTA One Start-->
<section class="cta-one">
    <div class="container">
        <div class="cta-one__inner">
            <div class="cta-one__shape-1">
                <img src="assets/images/shapes/cta-one-shape-1.png" alt="">
            </div>
            <div class="cta-one__img">
                <img src="assets/images/resources/cta-one-img.png" alt="">
            </div>
            <h3 class="cta-one__title">Craftin digital experiences<br> With that inspire</h3>
            <div class="cta-one__from-box">
                <form class="cta-one__form">
                    <div class="cta-one__input-box">
                        <input type="email" placeholder="Your E-mail" name="email">
                    </div>
                    <button type="submit" class="cta-one__btn thm-btn">Subscribe Us</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->
@endsection