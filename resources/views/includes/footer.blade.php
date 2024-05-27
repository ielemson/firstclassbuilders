@php
$setting = \App\Models\Setting::find(1);
$servicesPage = \App\Models\Service::where('status',1)->paginate(5);
$footerPosts =  \App\Models\Post::inRandomOrder()->limit(2)->get();
@endphp
<footer class="site-footer">
    <div class="site-footer__shape-1">
        <img src="assets/images/shapes/site-footer-shape-1.png" alt="">
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__logo">
                                <a href="{{ url("/") }}"><img src="{{ asset("images/settings/$setting->website_logo_light") }}" alt=""></a>
                            </div>
                            <p class="footer-widget__about-text">
                                {{ $setting->who_we_are }}
                            </p>
                            <div class="site-footer__social-box">
                                <h3 class="site-footer__social-title">Follow Us</h3>
                                <div class="site-footer__social">
                                    <a href="{{ $setting->facebook }}"><i class="icon-facebook"></i></a>
                                    <a href="{{ $setting->twitter }}"><i class="icon-twitter"></i></a>
                                    {{-- <a href="#"><i class="icon-link-in"></i></a> --}}
                                    {{-- <a href="#"><i class="icon-pinterest"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__services">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Service</h3>
                            </div>
                            <ul class="footer-widget__services-list list-unstyled">
                                @foreach ($servicesPage as $service)
                                     <li>
                                    <a href="{{ route("service.view",$service->slug) }}">{{ $service->title }}</a>
                                </li>
                                @endforeach
                               
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__news">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Latest News</h3>
                            </div>
                            <ul class="footer-widget__news-list list-unstyled">
                                @if (count($footerPosts) > 0)
                                    @foreach ($footerPosts as $post)
                                          <li>
                                    <div class="footer-widget__news-date">
                                        <p><span class="icon-calender"></span>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</p>
                                    </div>
                                    <h3 class="footer-widget__news-title"><a href="{{ route("posts.view",$post->slug) }}">
                                    {{ $post->title }}
                                    </a></h3>
                                </li> 
                                    @endforeach
                                @endif
                             
                                
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__column footer-widget__contact">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Contact</h3>
                            </div>
                            <ul class="footer-widget__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="content">
                                        <p><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-location"></span>
                                    </div>
                                    <div class="content">
                                        <p>{{ $setting->address }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <div class="content">
                                        <p><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="site-footer__bottom-inner">
                <p class="site-footer__bottom-text">© First Class Builders {{ Date('Y') }} | All Rights Reserved</p>
                <ul class="list-unstyled site-footer__bottom-menu">
                    <li><a href="{{ route("about.view") }}">Trams & Condition</a></li>
                    <li><a href="{{ route("about.view") }}">Privacy Policy</a></li>
                    <li><a href="{{ route("contact.view") }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>