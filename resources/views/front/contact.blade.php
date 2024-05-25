@php
    $setting = \App\Models\Setting::find(1);
@endphp

@extends('layouts.frontend')

@section('content')

@section('title')
    Contact Us
@endsection

@include('includes.pageHeader')

<div class="stricky-header stricked-menu main-menu main-menu-six">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Page Header Start-->
@include('includes.pageHeaderNav', ['header1'=>'Contact Us','header2'=>'Contact Us'])
<!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-page__left">
                            <div class="contact-page__img">
                                <img src="assets/images/resources/about-three-img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-page__right">
                            <h3 class="contact-page__title">
                                Get in Touch with First Class Builders
                            </h3>
                            <ul class="contact-page__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-location"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Location</h3>
                                        <p>{{ $setting->address }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Phone number</h3>
                                        <p><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></p>
                                        <p><a href="tel:{{ $setting->hotline }}">{{ $setting->hotline }}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Email</h3>
                                        <p><a href="mailto:{{ $setting->email1 }}">{{ $setting->email1 }}</a></p>
                                        <p><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
                                    </div>
                                </li>
                            </ul>
                            <div class="contact-page__social">
                                <a href="{{ $setting->facebook }}"><i class="icon-facebook"></i></a>
                                <a href="{{ $setting->twitter }}"><i class="icon-twitter"></i></a>
                                <a href="{{ $setting->instagram }}"><i class="icon-instagram"></i></a>
                                {{-- <a href="#"><i class="icon-link-in"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Google Map Start-->
        <section class="google-map-one">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3683006826536!2d7.39937027375175!3d6.846376219329639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044e866eb64d653%3A0xb7d71880b032625!2s105%20Enugu%20Rd%2C%20Owere%20Nsukka%2C%20Nsukka%20410111%2C%20Enugu!5e0!3m2!1sen!2sng!4v1716649963954!5m2!1sen!2sng"
                class="google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->

        <!--Contact Three Start-->
        <section class="contact-three">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center sec-title-animation animation-style1">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">Get in touch</span>
                        </div>
                        <h2 class="section-title__title title-animation">Send us a message</h2>
                    </div>
                    <form action="" class="contact-three__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-three__input-box">
                                    <input type="text" placeholder="Your Name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-three__input-box">
                                    <input type="email" placeholder="Your Email" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-three__input-box">
                                    <input type="text" placeholder="Phone Number" name="Phone">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-three__input-box">
                                    <input type="text" placeholder="Your Subject" name="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="contact-three__input-box text-message-box">
                                    <textarea name="message" placeholder="Write your Message"></textarea>
                                </div>
                                <div class="contact-three__btn-box">
                                    <button type="submit" class="thm-btn contact-three__btn">Send message<span
                                            class="icon-dabble-arrow-right"></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </section>
        <!--Contact Three End-->

        <!--CTA One Start-->
        {{-- <section class="cta-one">
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
        </section> --}}
        <!--CTA One End-->

@endsection