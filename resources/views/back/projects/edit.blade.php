@extends('layouts.back')
@section('title')
Create Service
@endsection

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
            <h4>Create Service</h4>
        </div>
        <div class="card-body">
            <div>
                <div>
                    <form action="{{ route('project.update',$project->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Enter Project Title</label>
                                <input type="text" name="title"  id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $project->title }}" required placeholder="Project Title">
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
                                    <option value="1" {{ $project->status == 1 ? 'selected': '' }}>Published</option>
                                    <option value="0" {{ $project->status == 0 ? 'selected':'' }}>Unpublished</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="img">Gallery Images <small class="text-danger">Select multiple images</small></label>
                                    
                                    <input type="file" name="image[]" class="form-control @error('image.*') is-invalid @enderror" multiple>

                                    @error('image.*')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        
                        <div class="col-12">
                            <div class="form-group button">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-lock"></i> Update Gallery</button>
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
