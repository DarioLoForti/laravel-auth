@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
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
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->titolo }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>{{ $project->autore }}</td>
                                <td>{{ Str::limit($project->descrizione, 20, '...') }}</td>
                                <td>{{ $project->fine_progetto }}</td>
                                <td><a href="{{ route('admin.projects.show', ['project' => $project->id]) }}"
                                        class="btn btn-sm btn-primary">Dettaglio</a></td>
                            </tr>
                        @endforeach
                </table>
                </tbody>
            </div>
        </div>
    @endsection
