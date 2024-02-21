@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Slug</th>
                            <th>Autore</th>
                            <th>Descrizione</th>
                            <th>Fine Progetto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->titolo }}</td>
                            <td>{{ $project->slug }}</td>
                            <td>{{ $project->autore }}</td>
                            <td>{{ Str::limit($project->descrizione, 20, '...') }}</td>
                            <td>{{ $project->fine_progetto }}</td>
                        </tr>
                </table>
                </tbody> --}}

                <div class="card text-center">
                    <div class="card-header">
                        Project
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $project->titolo }}</h5>
                        <p class="card-text">{{ $project->descrizione }}</p>
                        <h5>Autore: {{ $project->autore }}</h5>
                        <h5>Daata fine progetto:_ {{ $project->fine_progetto }}</h5>
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna ai post</a>
                    </div>
                    <div class="card-footer text-body-secondary">
                        2 days ago
                    </div>
                </div>
            </div>
        </div>
    @endsection
