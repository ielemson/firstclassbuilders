@php
    $setting = \App\Models\Setting::find(1);
    $services = \App\Models\Service::where('status',1)->get();
@endphp

@extends('layouts.frontend')

@section('content')

@section('title')
Our Blog
@endsection

@include('includes.pageHeader')

<div class="stricky-header stricked-menu main-menu main-menu-six">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Page Header Start-->
@include('includes.pageHeaderNav', ['header1'=>'Our Blog','header2'=>'Our Blog'])
<!--Page Header End-->

 <!--Blog Details Start-->
 <section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="blog-details__left">
                    <div class="blog-details__img-box">
                        <div class="blog-details__img">
                            <img src="{{ asset('images/' . $post->image) }}" alt="">
                        </div>
                       
                    </div>
                    <div class="blog-details__content">
                        <h3 class="blog-details__title-1">
                           {{$post->title}}
                        </h3>
                        <p class="blog-details__text-1" style="text-align: justify">
                            {!! $post->body !!}
                        </p>
                       
                    </div>
                   
                    <div class="blog-details__pagenation-box">
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
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="sidebar">
                    
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Recent Post</h3>
                        <ul class="sidebar__post-list list-unstyled">
                         @foreach ($posts as $randomPost)
                              <li>
                                <div class="sidebar__post-image">
                                    <img src="{{ asset('images/' . $randomPost->image) }}" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <a href="{{ route("posts.view",$post->slug) }}">
                                           {{$randomPost->title}}
                                        </a>
                                    </h3>
                                    <p class="sidebar__post-date"><i class="icon-calender-2"></i>
                                        {{ Carbon\Carbon::parse($randomPost->created_at)->format('d-m-Y') }}
                                    </p>
                                </div>
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