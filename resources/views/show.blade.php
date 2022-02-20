@extends('layouts.master')


@section('content')
    <div>
        <figure class="figure">
            <img src="{{$superhero->images}}" class="figure-img img-fluid rounded" alt="...">
        </figure>
    </div>
    <div>
        <p>Псевдоним:{{$superhero->nickname}}</p>
        <hr>
        <p>Настоящее имя:{{$superhero->real_name}}</p>
        <hr>
        <p>{{$superhero->catch_phrase}}</p>
        <hr>
        <p>{{$superhero->superpowers}}</p>
        <hr>
        <p> Описание:</p>
        <p>{{$superhero->origin_description}}</p>

    </div>
@endsection
