@extends('layouts.app')
@section('content')
<div class="card m-5" style="width: 18rem;">
    <img src="{{$show->url}} " class="card-img-top" alt="...">
    <div class="card-header">
      <h5 class="card-title">{{$show->name}} </h5>
      <span class="text-secondary"><i>{{$show->latin}}</i></span>
    </div>
    <div class="card-body">
        <p>Mesure du plant/taille du pot</p>
        <span>{{$show->minLenger}}/{{$show->maxLenger}} cm pot 1L </span>
    </div>
    <div class="card-footer">
        <span>Prix : {{$show->price}} €</span>
    </div>
  </div>

@endsection