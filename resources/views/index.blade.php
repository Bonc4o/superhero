@extends('layouts.master')

@section('title')
    Superheroes
@endsection

@section('content')
            <div class="row row-cols-1 row-cols-3 g-4">
                @foreach($superheroes->chunk(5) as $superheroChunk)
                    <div class="card-group">
                        <div class="card">
                            @foreach($superheroChunk as $superhero)
                                <img src="{{$superhero->images}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$superhero->nickname}}</h5>
                                    <p class="card-text">{{$superhero->catch_phrase}}</p>
                                    <a class="btn btn-danger" href="{{route('superheroes.show', [$superhero->nickname])}}"> Show </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
            </div>
            @endforeach


@endsection


