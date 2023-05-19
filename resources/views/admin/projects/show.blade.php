@extends('layouts/admin')

@section('content')
    <div class="container mt-3">
        <h1>{{$project->title}}</h1>

        <small>Developed by: {{$project->developers}}</small>

        <hr>

        <h2>Descrizione progetto:</h2>

        <p>
            {{$project->description}}
        </p>
        
    </div>
@endsection