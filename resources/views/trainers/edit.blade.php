@extends('layouts.app')

@section('title', 'Trainers Edit')

<!-- Vistas Convencionales section with yield es mas rapido y quita tiempo a las interfaces -->
@section('content')
  <div class="container">
  <form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="form-group">
        <label for="">Nombre</label>
      <input type="text" name="name" value="{{$trainer->name}}" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Avatar</label>
        <input type="file" name="avatar">
      </div>
  
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
  </div>
@endsection