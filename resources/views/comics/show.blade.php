@extends('layouts.main')

@section('content')
    <div class="container text-center d-flex justify-content-center ">
        <h1>More info: </h1>

        <div class="card " style="width: 42rem;">
            <div class="card-body">
              <h5 class="card-title">{{$comics->title}}</h5>
              <p class="card-text">{{$comics->description}}</p>
              <p  class="card-link">{{$comics->series}}</p>
              <p  class="card-link">{{$comics->sale_date}}</p>

            </div>
            <a href="{{route('comics.edit', $comics->id)}}" class="btn btn-warning">Modifiche</a>
          </div>


    </div>


@endsection


@section('title')
    | More info
@endsection
