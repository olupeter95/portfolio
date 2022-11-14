@extends('backend.master')
@section('content-body')
<div class="content">
    <div class="row">
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="text-white">Edit About</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('about.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $about->id }}">
                        <input type="hidden" name="old_image" value="{{ $about->profile_photo }}">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $about->title }}">
                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text"  rows="5" name="description" class="form-control" value="">{{ $about->description }}</textarea>
                            @error('description')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="profile_photo">Image</label>
                            <input type="file" name="profile_photo" class="form-control">
                            @error('profile_photo')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update About</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection