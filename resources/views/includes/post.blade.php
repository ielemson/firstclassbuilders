@if (count($projects) > 0)
    <!--Blog One Start-->
<section class="blog-one">
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Our Blogs</span>
            </div>
            <h2 class="section-title__title title-animation">Insights & Innovations</h2>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <!--Blog One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                <div class="blog-one__single">
                    <div class="blog-one__img-box">
                        <div class="blog-one__img">
                            <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}">
                            <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}">
                            <a href="#" class="blog-one__link"><span
                                    class="sr-only"></span></a>
                        </div>
                        <div class="blog-one__date">
                            <span>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</span>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <h3 class="blog-one__title"><a href="{{ route("posts.view",$post->slug) }}">
                            {{$post->title}}
                            </a></h3>
                        <div class="blog-one__read-more">
                            <a href="{{ route("posts.view",$post->slug) }}">Read more<span
                                    class="icon-dabble-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blog One Single End-->
            @endforeach
           
        </div>
{{-- 

        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Our Projects</span>
                </div>
                <h2 class="section-title__title title-animation">Explore Our Showcase of Excellence</h2>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                    <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset("assets/images/projects/$project->cover_image") }}" alt="{{ $project->title }}">
                                <img src="{{ asset("assets/images/projects/$project->cover_image") }}" alt="{{ $project->title }}">
                                <a href="#" class="blog-one__link"><span
                                        class="sr-only"></span></a>
                            </div>
                            <div class="blog-one__date">
                                <span>{{ Carbon\Carbon::parse($project->created_at)->format('d-m-Y') }}</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <h3 class="blog-one__title"><a href="{{ route("project.view",$project->slug) }}">
                                {{$project->title}}
                                </a></h3>
                            <div class="blog-one__read-more">
                                <a href="{{ route("project.view",$project->slug) }}">Read more<span
                                        class="icon-dabble-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                @endforeach
               
            </div>
        </div> --}}

    </div>
</section>
<!--Blog One End-->
@endif