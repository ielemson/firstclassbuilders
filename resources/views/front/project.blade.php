@php
    $setting = \App\Models\Setting::find(1);
    $services = \App\Models\Service::where('status',1)->get();
    $galleries = \App\Models\ProjectGallery::where('project_id',$project->id)->get();
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
@include('includes.pageHeaderNav', ['header1'=>'Project Details','header2'=>'Project Details'])
<!--Page Header End-->

 <!--Project Details Start-->
 <section class="project-details">
    <div class="container">
        <div class="project-details__img">
            <img src="{{ asset("assets/images/projects/$project->cover_image") }}" alt="">
           
        </div>
        <div class="project-details__content">
            <h3 class="project-details__title">{{ $project->title }}</h3>
            <p class="project-details__text">
                 {!! $project->description !!}
            </p>
            <h3 class="project-details__title-2 text-center">Project Gallery</h3>
        </div>
        <div class="row masonary-layout">
            @foreach ($galleries as $gallery)
                <!--Gallery Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <div class="gallery-page__img-box">
                            <img src="{{ asset("assets/images/projects/$gallery->name") }}" alt="">
                        </div>
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="{{ asset("assets/images/projects/$gallery->name") }}"><span
                                    class="fas fa-eye"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            @endforeach
            
        </div>
        <div class="blog-details__pagenation-box container mx-auto mt-5">
            <ul class="list-unstyled blog-details__pagenation">
                <li>
                    <div class="icon">
                        <a href="{{ url("/") }}"><span class="icon-arrow-left"></span></a>
                    </div>
                    <p>Home</p>
                </li>
                <li>
                    <p>Contact Us</p>
                    <div class="icon">
                        <a href="{{ route("contact.view") }}"><span class="icon-arrow-right"></span></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Project Details End-->

@endsection