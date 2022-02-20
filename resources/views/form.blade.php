@extends('layouts.master')

@section('content')
    <form method="POST" action="{{route('superheroes.store')}}">
        @csrf
        <br>
        <p class="text-center fs-3 fw-bolder">Add a new superhero</p>
        <br>
        <div class="input-group mb-3">
            <input name="nickname" type="text" class="form-control" placeholder="Nickname" aria-label="nickname"
                   aria-describedby="basic-addon1" required>
        </div>

        <div class="input-group mb-3">
            <input name="real_name" type="text" class="form-control" placeholder="Real name" aria-label="real_name"
                   aria-describedby="basic-addon2" required>
        </div>

        <div class="input-group mb-3">
            <input name="catch_phrase" type="text" class="form-control" placeholder="Catch phrase" aria-label="catch_phrase"
                   aria-describedby="basic-addon2" required>
        </div>

        <div class="input-group mb-3">
            <input name="superpowers" type="text" class="form-control" placeholder="Superpowers" aria-label="superpowers"
                   aria-describedby="basic-addon2" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Link Image:</span>
            <input name="images" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
        </div>

        <div class="input-group">
            <span class="input-group-text">Description</span>
            <textarea name="origin_description" class="form-control" aria-label="origin_description" required></textarea>
        </div>
        <br>
        <input type="submit" value="Add" class="btn btn-success" style="float: right" >

    </form>



@endsection
