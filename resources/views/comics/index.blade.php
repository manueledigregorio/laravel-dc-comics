@extends('layouts.main')

@section('content')
    <div class="container">

        <div class="row">
            @foreach ($comics as $items )
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{$items->thumb}}" class="card-img-top" alt="{{$items->title}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$items->title}}</h5>
                      <p class="card-text">{{$items->price}}</p>
                      <a href="{{route('comics.show', $items->id)}}" class="btn btn-primary">più info</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection


@section('title')
    | Home
@endsection
