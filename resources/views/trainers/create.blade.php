@extends('layouts.app')

@section('title', 'Trainers Create')

<!-- Vistas Convencionales section with yield es mas rapido y quita tiempo a las interfaces -->
@section('content')

<!-- Trabajar con LaravellCollective -->
 {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true ]) !!}

    @include('trainers.form')

    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
  {!! Form::close()!!}

  
{{-- <div class="container">
    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Avatar</label>
        <input type="file" name="avatar">
      </div>
  
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div> --}}

@endsection