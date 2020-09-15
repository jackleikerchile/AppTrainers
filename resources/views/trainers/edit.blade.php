@extends('layouts.app')

@section('title', 'Trainers Edit')

<!-- Vistas Convencionales section with yield es mas rapido y quita tiempo a las interfaces -->
@section('content')
  {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true ]) !!}

    @include('trainers.form')

  {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
  {!! Form::close()!!}
@endsection