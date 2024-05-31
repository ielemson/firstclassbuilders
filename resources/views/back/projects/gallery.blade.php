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
         @if (count($project_gallery) > 0)
        <div class="row">
           
                @foreach ($project_gallery as $gallery)
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card shadow">
                        <img src="{{ asset("assets/images/projects/$gallery->name") }}" class="card-img-top" alt="...">
                        
                        <div class="card-body card-p">
                            <div class="row">
                                <a href="{{ route('project.gallery.delete', $gallery->id) }}" class="col col-xs-4 btn btn-danger">
                                    <i class="fas fa-trash"></i> 
                                    Delete Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
             
            
           
        </div>
         {{ $project_gallery->links('pagination::bootstrap-4') }}
        @endif
       
    </div>
</section>
@endsection
