@extends('layouts.main')

@section('content')

<h1>Inserimento nuova comics</h1>

<div class="row d-flex justify-content-center">
    <div class="col-8">
        <form action="{{ route('comics.store') }}" method="POST">
            {{-- elemnto da inserire i  tutti i form di Laravel per un conctrollo di sicurezza  --}}
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Nome</label>
                <input type="text" class="form-control" id="title" name="title" >
            </div>
            <div class="mb-3">
                <label for="src" class="form-label">immagine</label>
                <input type="text" class="form-control" id="src" name="src" >
            </div>
            <div class="mb-3">
                <label for="src_h" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="src_h" name="src_h" >
            </div>
            <div class="mb-3">
                <label for="src_p" class="form-label">Serie</label>
                <input type="text" class="form-control" id="src_p" name="src_p" >
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Data di Uscita</label>
                <input type="text" class="form-control" id="type" name="type" >
            </div>
            <div class="mb-3">
                <label for="cooking_time" class="form-label">tipo</label>
                <input type="text" class="form-control" id="cooking_time" name="cooking_time" >
            </div>
            <div class="form-floating mb-5">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 200px"></textarea>
                <label for="floatingTextarea2">Descrizione</label>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>

        </form>
    </div>
</div>



@endsection
