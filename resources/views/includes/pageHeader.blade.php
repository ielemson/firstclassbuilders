@php
$services = \App\Models\Service::where('status',1)->get();
@endphp

<header class="main-header-six">
    <nav class="main-menu main-menu-six">
        <div class="main-menu-six__wrapper">
            <div class="container">
                <div class="main-menu-six__wrapper-inner">
                    <div class="main-menu-six__left">
                        <div class="main-menu-six__logo">
                            <a href="{{ url("/") }}"><img src="{{ asset("images/settings/$setting->website_logo_dark") }}" alt="first class builders logo"></a>
                        </div>
                    </div>
                    <div class="main-menu-six__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li class="">
                                <a href="{{ url("/") }}"><span class="rolling-text">Home</span></a>
                                
                            </li>
                            <li>
                                <a href="{{ route("about.view") }}"><span class="rolling-text">About</span></a>
                            </li>
                         
                            <li class="dropdown">
                                <a href="#"><span class="rolling-text">Services</span></a>
                                <ul>
                                    @if (count($services)>0)
                                    @foreach ($services as $service)
                                      <li><a href="{{ route("service.view",$service->slug) }}">{{ $service->title }}</a></li>    
                                    @endforeach
                                @endif
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#"><span class="rolling-text">Projects</span></a>
                                <ul>
                                    <li><a href="">Projects</a></li>
                                    {{-- <li><a href="">Project Details</a></li> --}}
                                </ul>
                            </li>
                           
                            <li>
                                <a href="{{ route("contact.view") }}"><span class="rolling-text">Contact</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="main-menu-six__right">
                        <div class="main-menu-six__call">
                            <div class="main-menu-six__call-icon">
                                <img src="assets/images/icon/main-menu-comment-icon.png" alt="">
                            </div>
                            <div class="main-menu-six__call-number">
                                <p>Need Help:</p>
                                <h5><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>