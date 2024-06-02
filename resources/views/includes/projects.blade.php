@if (count($galleries) > 0)
    <!--Blog One Start-->
<section class="blog-one">
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Our Projects</span>
            </div>
            <h2 class="section-title__title title-animation">Explore Our Project Gallery</h2>
        </div>
        <div class="row masonary-layout">

            @foreach($galleries as $gallery)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <div class="gallery-page__img-box">
                            <img src="{{ asset("assets/images/projects/$gallery->name") }}">
                        </div>
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="{{ asset("assets/images/projects/$gallery->name") }}"><span
                                    class="fas fa-eye"></span></a>
                        </div>
                    </div>
                </div>
            </div>
     
            <!--Gallery Page Single Start-->
        
        <!--Gallery Page Single End-->
        @endforeach
        </div>
    </div>
</section>
<!--Blog One End-->
@endif