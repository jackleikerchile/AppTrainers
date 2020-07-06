@extends('layouts.app')

@section('title', 'Trainers')

<!-- Vistas Convencionales section with yield es mas rapido y quita tiempo a las interfaces -->
@section('content')

<img style="height: 200px; width: 200px; margin:20px; background-color:#efefef" src="/images/{{$trainer->avatar}}" alt="" class="card-img-top rounded-circle mx-auto d-block">
  <div class="text-center">
    <h5 class="card-title">{{$trainer->name}}</h5>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam modi dolores quas ex dignissimos, doloremque molestiae voluptatum delectus vel! Ea necessitatibus quam, rerum nam accusamus quisquam dolorem nisi facilis alias? Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, illum aperiam.</p>
    <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
  </div>

@endsection