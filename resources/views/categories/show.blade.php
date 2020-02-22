@extends('plantilla')

@section('content')

<div class='title-app'>
<h2> {{$categories->name}}</h2>
</div>

<div class="application-show">
<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4 col-xl-6">
      <img src="{{ asset($categories->image) }}" class="card-img" alt="...">
    </div>
    <div class="col-md-8 col-xl-6">
      <div class="card-body">
        <h5 class="card-title"><strong>Categorias:</strong> {{$categories->name}}</h5>
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