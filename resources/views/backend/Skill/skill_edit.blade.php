@extends('backend.master')
@section('content-body')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="text-white">Edit Skill</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('skill.update') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $skill->id}}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $skill->name }}">
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <input type="range" name="level" class="form-control" min="0" value="{{ $skill->level }}" 
                            max="100" oninput="show.value=level.value">
                            <output id="show" for="level">{{ $skill->level }}</output>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Skill</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection