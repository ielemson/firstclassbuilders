@php
    $setting = \App\Models\Setting::find(1);
@endphp
@extends('layouts.frontend')

@section('title')
    Home
@endsection
@section('content')
@include("includes.mainHeader")

<div class="stricky-header header_style_one stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

@include('includes.slider')
{{-- @include('includes.about') --}}
   <!--About Two Start -->
   <section class="about-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-two__left">
                    <div class="section-title text-left sec-title-animation animation-style1">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">ABOUT US</span>
                        </div>
                        <h2 class="section-title__title title-animation">
                            Building Excellence, Creating Legacies
                        </h2>
                    </div>
                 
                    <p class="about-two__text">
                        {{ $setting->about }}  
                    </p>
                  
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-two__right">
                    <div class="about-two__img wow slideInRight" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Two End -->
<!--Services One Start -->
<section class="services-one">
    <div class="container">
        <div class="row">
            <!--Services One Single Start-->
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="services-one__single">
                    <div class="services-one__icon">
                        <span class="icon-swift-cargo"></span>
                    </div>
                    <div class="services-one__content">
                        <h3 class="services-one__title"><a href="#">Our Commitment</a></h3>
                        <p class="services-one__text">
                            At First Class Builders Limited, we are driven by a commitment to quality, safety, and innovation. Our mission is to deliver construction projects that not only meet but exceed our clients’ expectations. We achieve this by employing a skilled workforce, leveraging cutting-edge technology, and adhering to the highest standards of safety and sustainability.
                        </p>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                <div class="services-one__single">
                    <div class="services-one__icon">
                        <span class="icon-proconstruct"></span>
                    </div>
                    <div class="services-one__content">
                        <h3 class="services-one__title"><a href="#">Our Client</a></h3>
                        <p class="services-one__text">
                            Our client includes companies, corporate businesses, and government entities. We understand the unique requirements of each sector and tailor our services to provide the best solutions. Whether it’s a large-scale commercial project or a specialized governmental infrastructure, we bring the same level of dedication and expertise to every job.
                        </p>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="600ms">
                <div class="services-one__single">
                    <div class="services-one__icon">
                        <span class="icon-constructo-pro"></span>
                    </div>
                    <div class="services-one__content">
                        <h3 class="services-one__title"><a href="#">Our Vision</a></h3>
                        <p class="services-one__text"> 
                            We envision a world where our construction solutions contribute to better living and working environments. By continually pushing the boundaries of what’s possible in construction, we aim to be the preferred choice for clients seeking reliable and innovative building solutions.
                        </p>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="900ms">
                <div class="services-one__single">
                    <div class="services-one__icon">
                        <span class="icon-renovate"></span>
                    </div>
                    <div class="services-one__content">
                        <h3 class="services-one__title"><a href="#">Our Mission</a></h3>
                        <p class="services-one__text">
                          At First Class Builders Limited, our mission is to deliver exceptional construction services that exceed our clients' expectations. We are dedicated to quality, innovation, and sustainability, building structures that enhance communities and improve lives.
                        </p>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
        </div>
    </div>
</section>
<!--Services One Start -->

<!--About One Start -->

<!--About One End -->

<!-- Why Choose One Start -->
@include('includes.whyChooseUs')
<!-- Why Choose One End -->

@include('includes.post')

{{-- @include('includes.projects') --}}


<!--CTA One Start-->
@include('includes.newsletter')
<!--CTA One End-->

@endsection