@extends('applications.plantillaCreate')

@section('content')

<div class="create-applications">
<h1>Crear Producto</h1>
@include('applications.form', [
    'method' => 'post',
    'url' => '/applications',
    ]);

@endsection
</div>