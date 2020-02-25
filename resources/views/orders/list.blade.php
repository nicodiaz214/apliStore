@extends('plantilla')

@section('title')
Compras de {{Auth::user()->name}} 
@endsection

@section('content')

<div class="app-list">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h3>Compras de {{auth::user()->name}}</h3></div>
                <div class="col-xl-12" id="app-list-table">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nº ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
               
                    
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            <div class="edit-delete">
                                <form action="" method="get">
                                    <button class="btn btn-sm btn-success" title="Ver"><i class="far fa-eye"></i></button>
                                </form>
                            </div>
                            </td>
                        </tr>
                        
                </tbody>
            </table>
            </div>
            </div>
            <a href="/userprofile"><button class="btn btn-primary">Volver</button></a>
        </div>
    </div> 
    
@endsection