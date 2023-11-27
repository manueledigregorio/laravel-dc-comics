@extends('layouts.main')

@section('content')

<h1>Modifica comics: {{$comics->title}}</h1>

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
        <form action="{{ route('comics.update',$comics) }}" method="POST">

            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Nome</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comics->title}}" >
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb"value="{{$comics->thumb}}" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$comics->price}}" >
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comics->series}}" >
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di Uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comics->sale_date}}" >
            </div>
            <div class="form-floating mb-5">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 200px">{{  $comics->description }}</textarea>
                <label for="floatingTextarea2">Descrizione</label>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$comics->type}}" >
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>

        </form>
    </div>
</div>



@endsection

