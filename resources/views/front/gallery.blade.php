@php
    $setting = \App\Models\Setting::find(1);
    $services = \App\Models\Service::where('status',1)->get();

@endphp

@extends('layouts.frontend')

@section('content')

@section('title')
Our Project Gallery
@endsection

@include('includes.pageHeader')

<div class="stricky-header stricked-menu main-menu main-menu-six">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Page Header Start-->
@include('includes.pageHeaderNav', ['header1'=>'Project Gallery','header2'=>'Project Gallery'])
<!--Page Header End-->

 <!--Gallery Page Start-->
 <section class="gallery-page">
    <div class="container">
        <div class="row masonary-layout">
            @if (count($projects) > 0)
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
                    @foreach ($projects as $project)
                    @foreach($project->newgallery as $gallery)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <div class="gallery-page__img-box">
                                    <img src="{{ asset("assets/images/projects/$gallery->name") }}">
                                </div>
                                <div class="gallery-page__icon">
                                    <a class="img-popup" href="{{ asset("assets/images/projects/$gallery->name") }}" title="{{ $project->title }}"><span
                                            class="fas fa-eye"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                 @endforeach
                    <!--Gallery Page Single Start-->
                
                <!--Gallery Page Single End-->
                @endforeach
                </div>
            </div>
        </section>
        <!--Blog One End-->
        @endif
        </div>
    </div>
</section>
<!--Gallery Page End-->

@endsection