<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="about-one__img wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <img src="assets/images/resources/about-one-img-1_1_630x550.jpg" alt="">
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
                            We Specialize in Creating Tailored Building Solutions
                        </h2>
                    </div>
                    <p class="about-one__text">
                    {{ $setting->about }}    
                    </p>
                    {{-- <ul class="about-one__points-list list-unstyled">
                        <li>
                            
                            <div class="content">
                                <h3><a href="{{ route("about.view") }}">Our Committment</a></h3>
                                <p>
                                    We are committed to excellence, safety, and innovation in all our projects. Serving companies, corporate businesses, and governments, we tailor our services to meet the unique needs of each client.    
                                </p>
                            </div>
                        </li>
                        
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
</section>