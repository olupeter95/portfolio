@extends('backend.master')
@section('content-body')
<div class="content">
    <div class="row">
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="text-white">Edit Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$category->id}}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{$category->name}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection