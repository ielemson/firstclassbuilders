@extends('layouts.back')

@section('breadcrumb')
    <div class="col-sm-6">
        {{-- <h1 class="m-0">Dashboard</h1> --}}
        <a class="btn btn-success" href="{{ route('services.create') }}">
            Create new Services
        </a>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Posts</li>
        </ol>
    </div><!-- /.col -->

@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="row">
        
            @if (count($services) > 0)
                @foreach ($services as $service)
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card shadow">
                        <img src="{{ asset("assets/images/services/$service->img") }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title">{{ $service->title }}</h2>
                            <p class="card-text">
                            {{-- {{ $service->content }} --}}
                            {!! Illuminate\Support\Str::limit($service->content, 50) !!}
                            </p>
                        </div>
                        <div class="card-body card-p">
                            <div class="row">
                                {{-- <div class="col col-xs-4 ">
                                    <i class="far fa-comments"></i> 456
                                </div> --}}
                                <a href="{{ route('service.edit', $service->id) }}" class="col col-xs-4 ">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a href="{{ route('service.delete', $service->id) }}" class="col col-xs-4">
                                    <i class="fas fa-trash danger"></i> 
                                    Delete
                                </a>
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
