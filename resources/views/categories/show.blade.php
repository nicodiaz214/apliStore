@extends('plantilla')
@section('title')
Listado de Apps
@endsection

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Categorias</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
  </ol>
</nav>

<div class="applications-category">

<h2> Listado de Apps de {{$category->name}}</h2>
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