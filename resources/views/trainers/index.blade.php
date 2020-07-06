@extends('layouts.app')

@section('title', 'Trainers')

<!-- Vistas Convencionales section with yield es mas rapido y quita tiempo a las interfaces -->
@section('content')


<div class="row">
  @foreach ($trainers as $trainer)

  <div class="col-sm">
    <div class="card text-center" style="width: 18rem; margin-top:50px">
    <img style="height: 100px; width: 100px; margin:20px; background-color:#efefef" src="images/{{$trainer->avatar}}" alt="" class="card-img-top rounded-circle mx-auto d-block">
      <div class="card-body">
        <h5 class="card-title">{{$trainer->name}}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver más...</a>
      </div>
    </div>
  </div>
  
@endforeach
</div>

@endsection