@php
    $setting = \App\Models\Setting::find(1);
    $services = \App\Models\Service::where('status',1)->get();
@endphp

@extends('layouts.frontend')

@section('content')

@section('title')
Our Service
@endsection

@include('includes.pageHeader')

<div class="stricky-header stricked-menu main-menu main-menu-six">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Page Header Start-->
@include('includes.pageHeaderNav', ['header1'=>'Service Details','header2'=>'Service Details'])
<!--Page Header End-->

 <!--Blog Details Start-->
 <section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="blog-details__left">
                    <div class="blog-details__img-box">
                        <div class="blog-details__img">
                            <img src="{{ asset("assets/images/services/$service->img") }}" alt="">
                        </div>
                       
                    </div>
                    <div class="blog-details__content">
                        <h3 class="blog-details__title-1">
                           {{$service->title}}
                        </h3>
                        <p class="blog-details__text-1" style="text-align: justify">
                            {!! $service->content !!}
                        </p>
                       
                    </div>
                   
                    
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="sidebar">
                    
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Our Services</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            @foreach ($services as $serve)
                                <li>
                                <a href="{{ route("service.view",$serve->slug) }}"><span class="icon-folder"></span>{{ $serve->title }}</a>
                            </li>
                            @endforeach
                            
                           
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Details End-->
@endsection