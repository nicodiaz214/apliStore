@extends('plantilla')

@section('title')
Perfil de {{Auth::user()->name}} 
@endsection

@section('content')

@include('user.form', [
            'method' => 'post',
            'url' => '/userprofile/',
            'disabled' => 1])

@endsection