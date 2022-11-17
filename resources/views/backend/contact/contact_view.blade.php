@extends('backend.master')
@section('content-body')
<div class="content">
    <div class="row">
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="text-white">All Contact</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col" width="30%">message</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $contact->name}}</td>
                                <td>{{ $contact->email}}</td>
                                <td>{{ $contact->subject}}</td>
                                <td>{{ $contact->message}}</td>
                                <td>
                                    <a href="{{ route('contact.delete',$contact->id) }}" class="btn btn-danger btn-sm">
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
    </div>
</div>
@endsection