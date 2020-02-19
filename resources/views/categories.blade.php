@extends('plantilla')

@section('categories')

<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand"></a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Busca tu aplicacion" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>

<div class="applications-category">
<div class="applications-list"></div>
<h2>Listado de aplicaciones</h2>

</div>


@endsection