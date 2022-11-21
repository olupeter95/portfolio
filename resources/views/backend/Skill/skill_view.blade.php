@extends('backend.master')
@section('content-body')
<div class="content">
    <div class="row">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="text-white">All Skill</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Level</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($skills as $skill)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $skill->name}}</td>
                                <td>{{ $skill->level}}</td>
                                <td>
                                <a href="{{ route('skill.edit',$skill->id) }}" class="btn btn-primary btn-sm">
                                        <i class="mdi mdi-edit"></i>&nbsp; Edit
                                    </a>
                                    <a href="{{ route('skill.delete',$skill->id) }}" class="btn btn-danger btn-sm">
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
                    <h4 class="text-white">Add Skill</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('skill.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <input type="range" name="level" class="form-control" min="0" value="0" 
                            max="100" oninput="show.value=level.value">
                            <output id="show" for="level">0</output>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Skill</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection