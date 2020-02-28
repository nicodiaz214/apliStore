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
          @if(! auth::user()->orders()->get()->contains($application->id))
            <form action="/userprofile/orders" method="post">
            @csrf
              <input type="hidden" type="text" name="application_price" id="" value="{{$application->price}}">
              <button type="submit" class="btn btn-primary" name="application_id" value="{{$application->id}}" onclick="return confirm('Seguro quieres comprar la app?');">Comprar</button>
            </form>
          @else
            <button class="btn btn-secondary" disabled><i class="fas fa-ban"></i> Ya tenes esta app!</button>
          @endif
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