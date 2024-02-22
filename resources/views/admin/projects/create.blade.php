@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="post">
                    @csrf
                    <div class="form-group my-3">
                        <label for="titolo" class="control-label">Titolo</label>
                        <input type="text" name="titolo" id="titolo" placeholder="Inserisci il titolo del progetto"
                            class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="autore" class="control-label">Autore</label>
                        <input type="text" name="autore" id="autore" placeholder="Inserisci il nome del autore"
                            class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="descrizione" class="control-label">Descrizione</label>
                        <textarea name="descrizione" id="descrizione" class="form-control" placeholder="Inserisci la descrizione del progetto"
                            cols="50" rows="10"></textarea>
                    </div>
                    <div class="form-group my-3">
                        <button class="btn btn-sm btn-success" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
