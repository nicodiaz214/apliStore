@extends('plantilla')
@section('title', 'Register')
@section('register')

<div class='register-tittle'>
<h4>Registrate</h4>          
<form action="register"  class="form-register" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" require>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Password" require>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" require>
  </div>
  <button type="submit" class="btn btn-primary">Registrate</button>
</form>

</div>

@endsection