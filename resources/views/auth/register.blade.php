@extends('plantilla')
@section('title', 'Register')
@section('register')

<div class='register-tittle'>
<h4>Registrate</h4>          
<form action="{{ route('register') }}" method="post" class="form-register" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleInputPassword1" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="form-group ">
    <label for="user_type">Tipo de Usuario:</label>
     <select name="user_type" id="user_type" class="form-control" required>
     <option value="1">Soy desarrollador</option>
     <option value="2">No soy Desarrollador</option>
     </select>
     </div>
  <button type="submit" class="btn btn-primary">Registrate</button>
</form>

</div>

@endsection