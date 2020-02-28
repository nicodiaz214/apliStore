@extends('plantilla')

@section('title')
Perfil de {{Auth::user()->name}} 
@endsection

@section('content')

<div class="app-list">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h3>Listado de Apps de {{auth::user()->name}}</h3></div>
                <div class="col-xl-12" id="app-list-table">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nº ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Editar / Borrar</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($applications as $application)
                        <tr>
                            <td>{{$application->id}}</td>
                            <td><a href="{{url('/applications/'.$application->id)}}" target="_blank" rel="noopener noreferrer" title="{{$application->name}}">{{$application->name}}</a></td>
                            <td>{{$application->description}}</td>
                            <td>$ {{$application->price}}</td>
                            <td>
                            <div class="edit-delete">                      
                                <form action="{{url('/developer/applications/'.$application->id.'/edit')}}" method="get">
                                    <button class="btn btn-sm btn-secondary" name="" value=""
                                        title="Editar"><i class="far fa-edit"></i>
                                    </button>
                                </form>
                                <form action="{{url('/developer/applications/'.$application->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" name="" value="" title="Eliminar" onclick="return confirm('Seguro quieres borras la app?');"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            </div>
            <a href="/userprofile"><button class="btn btn-primary">Volver</button></a>
        </div>
    </div> 
    
@endsection