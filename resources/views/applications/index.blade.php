@extends('plantilla')

@section('applications')

<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand"></a>

  <form class="form-inline" action="/applications" role="search" method="get">
  <input class="form-control mr-sm-2" type="text" name="name" placeholder="Busca tu aplicacion" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>

<div class="applications-category">

<h2> Listado de Apps </h2>
<section class="applications-off">
<div class="applications-list">
@foreach ($applications as $application)
<div class="applications-card">
        <a href=""><img src="{{ asset($application->image_url) }}" alt=""></a>
        <h5 class="applications-tittle">{{$application->name}}</h5>
        <p class="applications-description">{{$application->description}}</p>
        <button class="btn-buy"> <a href="/applications/{{ $application->id}}">Comprar!</a></button>
    </div>
@endforeach
</div>
{{ $applications->links() }}
</section>
</div>


@endsection