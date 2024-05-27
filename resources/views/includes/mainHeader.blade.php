@php
    $setting = \App\Models\Setting::find(1);
@endphp
<header class="main-header header_style_one">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        <a href="{{ url("/") }}"><img src="{{ asset("images/settings/$setting->website_logo_dark") }}" alt="first class builders logo"></a>
                    </div>
                </div>
                <div class="main-menu__right">
                    <div class="main-menu__menu-box-and-call-box">
                        <div class="main-menu__menu-box">
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li>
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
                                    <li class="">
                                        <a href="{{ route("gallery.view") }}"><span class="rolling-text">Gallery</span></a>
                                        {{-- <ul>
                                           @if (c{{ route("contact.view") }}ount($projects) > 0)
                                           @foreach ($projects as $project)
                                           <li><a href="{{ route("project.view",$project->slug) }}">{{ $project->title }}</a></li>   
                                           @endforeach
                                           @endif
                                           
                                        </ul> --}}
                                    </li>
                                    <li>
                                        <a href="{{ route("contact.view") }}"><span class="rolling-text">Contact</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu__call">
                            <div class="main-menu__call-icon">
                                <img src="assets/images/icon/main-menu-comment-icon.png" alt="">
                            </div>
                            <div class="main-menu__call-number">
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