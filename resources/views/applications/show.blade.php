@extends('plantilla')
@section('title')
{{$application->name}}
@endsection
@section('content')

@if(Auth::user() == NULL)
@include('auth.login')
@else

<div class='title-app'>
<h2> {{$application->name}}</h2>
</div>

<div class="application-show">
<hr>
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
        <form action="/userprofile/orders" method="post">
        @csrf
        <input type="hidden" name="application_id" id="" value="{{$application->id}}">
        <input type="hidden" type="text" name="user_id" id="" value="{{auth::user()->id}}">
        <input type="hidden" type="text" name="price" id="" value="{{$application->price}}">
        
        <button type="submit" class="btn btn-primary">Comprar</button>
        </form>
        <hr>
      </div>
    </div>
  </div>
  <hr>
</div>
<div class='link-back'>
<a href="/applications"><button class="btn btn-primary">Volver</button></a>
</div>
</div>
@endif

@endsection