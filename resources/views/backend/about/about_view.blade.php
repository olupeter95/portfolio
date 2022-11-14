@extends('backend.master')
@section('content-body')
<div class="content">
    <div class="row">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="text-white">All About</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Lucia</td>
                                <td>Christ</td>
                                <td>@Lucia</td>
                                <td>
                                    <a href="" class="btn btn-primary">
                                        <i class="mdi mdi-pencil"></i>&nbsp; Edit
                                    </a>
                                    <a href="" class="btn btn-danger">
                                        <i class="mdi mdi-delete"></i>&nbsp; Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="text-white">Add About</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="title">
                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text"  rows="5" name="description" class="form-control" placeholder="description"></textarea>
                            @error('description')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="profile_photo">Image</label>
                            <input type="file" name="profile_photo" class="form-control" placeholder="image">
                            @error('profile_photo')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add About</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection