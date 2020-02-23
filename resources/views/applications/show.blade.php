@extends('plantilla')
@section('title')
{{$application->name}}
@endsection
@section('applications-show')

<div class='title-app'>
<h2> {{$application->name}}</h2>
</div>

<div class="application-show">
<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4 col-xl-6">
      <img src="{{ asset($application->image_url) }}" class="card-img" alt="...">
    </div>
    <div class="col-md-8 col-xl-6">
      <div class="card-body">
        <h5 class="card-title"><strong>App:</strong> {{$application->name}}</h5>
        <hr>
        <p class="card-text"><strong>Descripcion:</strong> {{$application->description}}</p>
        <hr>
        <p class="card-text"><strong>Precio:</strong> ${{$application->price}}</p>
        <hr>
        <button type="submit" class="btn btn-primary">Comprar</button>
        <hr>
      </div>
    </div>
  </div>
  <hr>
</div>
<div class='link-back'>
<a href="/applications">volver</a>
</div>
</div>


@endsection