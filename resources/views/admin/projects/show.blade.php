@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header bg-danger">
                        <h1>Project</h1>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Titolo: {{ $project->titolo }}</h3>
                        <p class="card-text">{{ $project->descrizione }}</p>
                        <div class="d-flex justify-content-around">
                            <h5>Autore: {{ $project->autore }}</h5>
                            <h5>Daata fine progetto: {{ $project->fine_progetto }}</h5>
                        </div>
                        <a href="{{ route('admin.projects.edit', $project->id) }}"
                            class="btn btn-warning mt-4 float-start">Modifica
                            Progetto</a>
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mt-4 float-end">Torna ai
                            post</a>
                    </div>

                </div>
            </div>
        </div>
    @endsection
