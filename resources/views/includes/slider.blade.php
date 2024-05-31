<!--Main Slider Start-->
{{-- <section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
            "delay": 8000
        } 
    }'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="main-slider__bg"
                    style="background-image: url(assets/images/backgrounds/slider-1-1.jpg);"></div>
                <div class="main-slider__shape-1"
                    style="background-image: url(assets/images/shapes/main-slider-shape-1.jpg);"></div>
                <div class="main-slider__img">
                    <img src="assets/images/resources/main-slider-img-1.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <div class="main-slider__sub-title-box">
                                    <p class="main-slider__sub-title">Welcome to First Class Builders Limited</p>
                                    <div class="main-slider__sub-title-shape"></div>
                                </div>
                                <h2 class="main-slider__title">Your unique <br> solutions</h2>
                                <p class="main-slider__text">
                                    Experience excellence in construction with First Class Builders Limited. From homes to commercial buildings, we bring your vision to life with quality and innovation. Let’s build the future together.
                                </p>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <!-- If we need navigation buttons -->

    </div>
</section> --}}
<!--Main Slider End-->
@php
    $setting = \App\Models\Setting::find(1);
@endphp
   <!--Main Slider Four Start-->
   <section class="main-slider-four">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
            "delay": 8000
        } 
    }'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="main-slider-four__bg"
                    style="background-image: url(assets/images/backgrounds/slider_1.jpg);"></div>
                <div class="main-slider-four__img-1">
                    <img src="assets/images/resources/slider_1.jpg" alt="">
                </div>
                <div class="main-slider-four__img-2">
                    <img src="assets/images/resources/slider_1.jpg" alt="">
                </div>
                <div class="main-slider-four__shape-1"></div>
                <div class="main-slider-four__shape-2"></div>
                <div class="main-slider-four__shape-3"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-four__content">
                                <h2 class="main-slider-four__title">
                                    Welcome to <span>First Class</span> Builders
                                </h2>
                                <p class="main-slider-four__text">
                                    Experience excellence in construction with First Class Builders Limited. <br> From homes to commercial buildings, we bring your vision to life with quality and innovation. <br> Let’s build the future together.
                                </p>
                                <div class="main-slider-four__btn-and-call-box">
                                    <div class="main-slider-four__btn-box">
                                        <a href="{{ route("about.view") }}" class="main-slider-four__btn thm-btn">Read
                                            more<span class="icon-dabble-arrow-right"></span></a>
                                    </div>
                                    <div class="main-slider-four__call">
                                        <div class="main-slider-four__call-icon">
                                            <span class="icon-call"></span>
                                        </div>
                                        <div class="main-slider-four__call-number">
                                            <p>Talk to Us</p>
                                            <h5><a href="tel:{{ $setting->hotline }}">{{ $setting->hotline }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- If we need navigation buttons -->
        <div class="main-slider-three__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-arrow-left"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-arrow-right"></i>
            </div>
        </div>
    </div>
</section>
<!--Main Slider Four End-->