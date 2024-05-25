@extends('layouts.back')
@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Post Add</li>
        </ol>
    </div><!-- /.col -->

@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" name="featured" for="exampleCheck1">Featured Post</label>
                            </div>
                           <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select id="category" name="category" class="form-control custom-select">
                                        <option selected disabled>Select one</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                           <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Post Title </label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                           </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="excerpt">Post Excerpt</label>
                                    <textarea id="excerpt" name="excerpt" class="form-control" rows="4" required></textarea>
                                </div>
                            </div>

                           <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Post Description</label>
                                <textarea id="summernote" name="body" class="form-control" rows="4" required></textarea>
                            </div>

                           </div>

                           <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Post Image</label>
                                <input type="file" name="image" class="form-control-file" id="image" required>
                            </div>
                           </div>

                           </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->

@section('javascript')
  <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>  
<script>
    $('#summernote').summernote({
      placeholder: 'Hello your post description goes here..',
      tabsize: 2,
      height: 200
    });
  </script>
@endsection
@endsection

