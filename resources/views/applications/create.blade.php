@extends('applications.plantillaCreate')

@section('content')

<div class="create-applications">
<h1>Subí tu app</h1>
@include('applications.form', [
    'method' => 'post',
    'url' => '/developer/applications/add',
    ])

@endsection
</div>