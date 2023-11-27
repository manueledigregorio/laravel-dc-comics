@extends('layouts.main')

@section('content')

<h1>Inserimento nuova comics</h1>

@if($errors->any())
    <div class="alert alert-danger" role="alert" >
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row d-flex justify-content-center">
    <div class="col-8">
        <form action="{{ route('comics.store') }}" method="POST">
            {{-- elemnto da inserire i  tutti i form di Laravel per un conctrollo di sicurezza  --}}
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Nome *</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title')}}" >
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" >
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" >
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di Uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" >
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">tipo</label>
                <input type="text" class="form-control" id="type" name="type" >
            </div>
            <div class="form-floating mb-5">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 200px"></textarea>
                <label for="description">Descrizione</label>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>

        </form>
    </div>
</div>



@endsection
