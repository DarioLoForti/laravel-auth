@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white mt-5">Modifica progetto</h1>
            </div>
            <div class="col-12">
                <form class="mt-5" action="{{ route('admin.projects.update', $project->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-3">
                        <label for="titolo" class="control-label text-white">Titolo</label>
                        <input type="text" name="titolo" id="titolo" placeholder="Inserisci il titolo del progetto"
                            class="form-control @error('titolo') is-invalid @enderror" required>
                        @error('titolo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="autore" class="control-label text-white">Autore</label>
                        <input type="text" name="autore" id="autore" placeholder="Inserisci il nome del autore"
                            class="form-control @error('autore') is-invalid @enderror" required>
                        @error('autore')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="descrizione" class="control-label text-white">Descrizione</label>
                        <textarea name="descrizione" id="descrizione" class="form-control @error('descrizione') is-invalid @enderror"
                            placeholder="Inserisci la descrizione del progetto" cols="50" rows="10" required></textarea>
                        @error('descrizione')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="fine_progetto" class="control-label text-white">Fine Progetto</label>
                        <input type="text" name="fine_progetto" id="fine_progetto"
                            placeholder="Inserisci la data di fine progetto"
                            class="form-control @error('fine_progetto') is-invalid @enderror" required>
                        @error('fine_progetto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <button class="btn btn-success" type="submit">Salva</button>
                    </div>
                </form>
                <div class="form-group my-3">
                    <a href="{{ route('admin.projects.show', $project->id) }}"><button class="btn btn-primary float-end"
                            type="submit">Indietro</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection