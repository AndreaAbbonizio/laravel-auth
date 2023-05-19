@extends('layouts/admin')


@section('content')
    <h1 class="my-3">I tuoi progetti</h1>

    <div class="container container-cards">
        @foreach ($projects as $project)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> {{$project->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Developed by: {{$project->developers}}</h6>  
                    <p class="card-text">{{$project->description}}</p>
                    <a href=" {{route('admin.projects.show', $project->slug)}} " class="card-link">Card link</a>
                    <a href=" {{route('admin.')}} " class="card-link">Torna alla Home</a>
                </div>
            </div>
            
            
        @endforeach
    </div>

@endsection