@php
    $setting = \App\Models\Setting::find(1);
@endphp
<header class="main-header-two">
    <div class="main-header-two__wrap">
        <div class="main-header-two__logo">
            <a href="index.html">
                <img src="{{ asset("images/settings/$setting->website_logo_dark") }}" alt="">
            </a>
        </div>
        <div class="main-header-two__top">
            <div class="main-header-two__top-inner">
                <ul class="list-unstyled main-header-two__contact-list">
                    <li>
                        <div class="icon">
                            <i class="icon-call"></i>
                        </div>
                        <div class="text">
                            <p><a href="tel:6295550129">(629) 555-0129</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="icon-email"></i>
                        </div>
                        <div class="text">
                            <p><a href="mailto:info@example.com">info@example.com</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="icon-location"></i>
                        </div>
                        <div class="text">
                            <p>6391 Elgin St. Celina, 10299</p>
                        </div>
                    </li>
                </ul>
                <div class="main-header-two__top-right">
                    <div class="main-header-two__social-box">
                        <div class="main-header-two__social-box-inner">
                            <h4 class="main-header-two__social-box-title">Follow On:</h4>
                            <div class="main-header-two__social">
                                <a href="#"><i class="icon-facebook"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-Frame"></i></a>
                                <a href="#"><i class="icon-link-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu main-menu-two">
            <div class="main-menu-two__wrapper">
                <div class="main-menu-two__wrapper-inner">
                    <div class="main-menu-two__menu-box-and-btn-box">
                        <div class="main-menu-two__menu-box">
                            <div class="main-menu-two__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown">
                                        <a href="index.html"><span class="rolling-text">Home</span></a>
                                        <ul>
                                            <li><a href="index.html">Home One</a></li>
                                            <li><a href="index2.html">Home Two</a></li>
                                            <li><a href="index3.html">Home Three</a></li>
                                            <li><a href="index4.html">Home Four</a></li>
                                            <li><a href="index5.html">Home Five</a></li>
                                            <li class="dropdown">
                                                <a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header One</a></li>
                                                    <li><a href="index2.html">Header Two</a></li>
                                                    <li><a href="index3.html">Header Three</a></li>
                                                    <li><a href="index4.html">Home Four</a></li>
                                                    <li><a href="index5.html">Home Five</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.html"><span class="rolling-text">About</span></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#"><span class="rolling-text">Pages</span></a>
                                        <ul>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#"><span class="rolling-text">Services</span></a>
                                        <ul>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="service-details.html">Services Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#"><span class="rolling-text">Projects</span></a>
                                        <ul>
                                            <li><a href="projects.html">Projects</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#"><span class="rolling-text">Blog</span></a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html"><span class="rolling-text">Contact</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu-two__btn-box">
                            <a href="contact.html" class="main-menu-two__btn thm-btn">Get A quato</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>