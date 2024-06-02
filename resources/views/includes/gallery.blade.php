@if (count($projects) > 0)
       <!-- Gallery One Start -->
   <section class="gallery-one">
    <div class="gallery-one__top">
        <div class="container">
            <div class="gallery-one__top-inner">
                <div class="section-title text-left sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Our Projects</span>
                    </div>
                    <h2 class="section-title__title title-animation">Explore Our Project Gallery</h2>
                </div>
                <div class="gallery-one__nav">
                    <div class="swiper-button-prev1">
                        <i class="icon-arrow-left"></i>
                    </div>
                    <div class="swiper-button-next1">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-one__bottom">
        <div class="container">
            <div class="gallery-one__swiper-box">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                    "slidesPerView": 1, 
                    "spaceBetween": 0,
                    "speed": 2000,
                    "loop": true,
                    "pagination": {
                        "el": ".swiper-dot-style1",
                        "type": "bullets",
                        "clickable": true
                    },

                    

                    "navigation": {
                        "nextEl": ".swiper-button-prev1",
                        "prevEl": ".swiper-button-next1"
                    },
                    "autoplay": { "delay": 9000 },
                    "breakpoints": {
                            "0": {
                                "spaceBetween": 0,
                                "slidesPerView": 1
                            },
                            "375": {
                                "spaceBetween": 0,
                                "slidesPerView": 1
                            },
                            "575": {
                                "spaceBetween": 0,
                                "slidesPerView": 1
                            },
                            "768": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "992": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "1200": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            }
                        }
                }'>
                    <div class="swiper-wrapper">
                            @foreach ($projects as $project)
                                <!--Gallery One Single Start-->
                                @foreach ($project->newgallery as $gallery)
                                    <div class="swiper-slide">
                            <div class="gallery-one__single">
                                <div class="gallery-one__img">
                                    <img src="{{ asset("assets/images/projects/$gallery->name") }}" alt="">
                                    <div class="gallery-one__content-box">
                                        <div class="gallery-one__title-box">
                                            <h4 class="gallery-one__title"><a
                                                    href="#">{{ $project->title }}</a>
                                            </h4>
                                            {{-- <p class="gallery-one__sub-title">Lorem Ipsum is simply dummy</p> --}}
                                        </div>
                                        <div class="gallery-one__arrow">
                                            <a href="{{ asset("assets/images/projects/$gallery->name") }}"
                                                class="img-popup"><span class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Gallery One Single End-->
                                @endforeach
                        
                            @endforeach
                    </div>
                </div>
                <!-- If we need navigation buttons -->

            </div>
        </div>
    </div>
</section>
<!-- Gallery One End -->
@endif