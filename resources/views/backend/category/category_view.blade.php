@extends('backend.master')
@section('content-body')
<div class="content">
    <div class="row">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="text-white">All Category</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $category->name}}</td>
                                <td>
                                <a href="{{ route('category.edit',$category->id) }}" class="btn btn-primary btn-sm">
                                        <i class="mdi mdi-edit"></i>&nbsp; Edit
                                    </a>
                                    <a href="{{ route('category.delete',$category->id) }}" class="btn btn-danger btn-sm">
                                        <i class="mdi mdi-delete"></i>&nbsp; Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="text-white">Add Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection