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
    </div>
</section>
<!--Gallery Page End-->

@endsection