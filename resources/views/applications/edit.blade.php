@extends('applications.plantillaCreate')

@section('content')

<div class="create-applications">
<h1>Editar tu app</h1>
@include('applications.form', [
    'method' => 'patch',
    'url' => '/developer/applications/'.$application->id,
    ])

@endsection
</div>