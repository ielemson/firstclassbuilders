@extends('layouts.back')

@if (session()->has('success'))
    @section('alerts')
        <div class="alert alert-success alert-dismissible fade show light-green" role="alert">
            {!! session('success') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endsection
@endif

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
            <h4>Create Project</h4>
        </div>
        <div class="card-body">
            <div>
                <div>
                    {{-- <form class="form-horizontal" method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
                        @csrf --}}
                    <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Enter Project Title</label>
                                    <input type="text" name="title"  id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required placeholder="Project Title">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Status</label>
                                        <select  name="status"  id="status" class="form-control @error('status') is-invalid @enderror" required >
                                        <option value="">Select Status</option>
                                        <option value="1">Publish</option>
                                        <option value="0">Unpublish</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="img">Cover Image <small class="text-danger">Select one image</small></label>
                                       
                                        <input type="file" name="cover_image" class="form-control @error('cover_image') is-invalid @enderror">

                                        @error('cover_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="img">Gallery Images <small class="text-danger">Select multiple images</small></label>
                                        
                                        <input type="file" name="image[]" class="form-control @error('image.*') is-invalid @enderror" multiple>

                                        @error('image.*')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            {{-- <div class="col-md-12">

                                <div class="form-group">
                                    <label for="">Enter Project Description</label>
                                    <textarea name="description" id="" class="form-control" rows="5" >{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="col-12">
                                <div class="form-group button">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-lock"></i> Create</button>
                                    {{--  <a role="button" href="admin/index.html" class="bizwheel-btn theme-2">Login</a>  --}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

