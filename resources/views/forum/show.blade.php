@extends('layouts.app')
@section('title', 'Information detailé')
@section('content')
<div class="container-xxl mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if(session('success'))
            <div class="alert alert-success col-12">
                {{ session('success') }}
            </div>
            @endif
            

            <div class="card">
                <div class="card-header">
                    <h2>{{ $student->nom }}</h2>
                </div>
                <div class="card-body">
                    <p><strong>Address:</strong> {{ $student->address }}</p>
                    <p><strong>Email:</strong> {{ $student->email }}</p>
                    <p><strong>Date of Birth:</strong> {{ $student->dob }}</p>
                    <p><strong>Phone:</strong> {{ $student->phone }}</p>
                    <p><strong>City:</strong> {{ $student->ville->nom }}</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                <div class="d-flex">
                    <a class="btn btn-success me-3" href="{{route('etudiants.edit', $student->id)}}">Edit content</a>
                    <a class="btn btn-secondary" href="{{route('forum.index')}}">Return</a>
                
                    
                </div>
            </div>
        </div>
    </div>
</div>




@endsection