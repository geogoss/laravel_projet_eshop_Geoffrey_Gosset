@extends('layouts.app')
@section('content')
    <h1 class="text-center">{{ $show->name }} <a href="/edit/{{ $show->id }}"><i
                class="fas fa-pencil-alt fa-xs"></i></a> </h1>
    <div class="card m-5 mx-auto" style="width: 18rem;">
        <img src="{{ $show->url }} " class="card-img-top" alt="...">
        <div class="card-header">
            <h5 class="card-title">{{ $show->name }} </h5>
            <span class="text-secondary"><i>{{ $show->latin }}</i></span>
        </div>
        <div class="card-body">
            <p>Mesure du plant/taille du pot</p>
            <span>{{ $show->minLenger }}/{{ $show->maxLenger }} cm pot 1L </span>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <span>Prix : {{ $show->price }} €</span>
            <button class="btn btn-secondary text-white"><i class="fas fa-shopping-cart"> </i></button>
        </div>
        <div class="d-flex justify-content-between">
            <form action="/delete/{{ $show->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
            <button class="btn btn-success"><a class="text-decoration-none text-white"
                    href="/show/{{ $show->id }} ">Détails</a>
            </button>
            <button class="btn btn-primary">
                <a class="text-decoration-none text-white" href="/edit/{{ $show->id }} ">Modifier</a>
            </button>

        </div>
    </div>
@endsection
