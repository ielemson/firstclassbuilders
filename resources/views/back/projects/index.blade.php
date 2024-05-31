@extends('layouts.back')

@section('breadcrumb')
    <div class="col-sm-6">
        {{-- <h1 class="m-0">Dashboard</h1> --}}
        <a class="btn btn-success" href="{{ route('project.create') }}">
            Create New Project
        </a>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Projects</li>
        </ol>
    </div><!-- /.col -->

@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="row">
        
            @if (count($projects) > 0)
                @foreach ($projects as $service)
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card shadow">
                        {{-- <img src="{{ asset("assets/images/projects/$service->img") }}" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            {{-- <h2 class="card-title">{{ $service->title }}</h2> --}}
                            <p class="card-text">
                            {{ $service->title }}
                            </p>
                        </div>
                        <div class="card-body card-p">
                            <div class="row">
                                {{-- <div class="col col-xs-4 ">
                                    <i class="far fa-comments"></i> 456
                                </div> --}}
                               <div class="btn-group mx-auto" role="group">
                                <a href="{{ route('project.edit', $service->id) }}" class=" btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                           
                                <a href="{{ route('project.view', $service->id) }}" class="btn btn-info">
                                    <i class="fas fa-eye"></i> 
                                    View
                                </a>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
           
        </div>
    </div>
</section>
@endsection
