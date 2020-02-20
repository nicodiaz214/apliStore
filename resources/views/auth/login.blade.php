@extends('plantilla')
@section('title', 'Login')
@section('login')
<div class='login-tittle'>
<h4>Inicia sesion</h4>

<form class="form-login">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" require>
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu email con nadie.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" require>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>

</div>

@endsection