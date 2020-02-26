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
                        <th>Nº de Compra</th>
                        <th>Nombre Aplicación</th>
                        <th>Comentario</th>
                        <th>Rating</th>
                        <th>Calificación</th>
                    </tr>
                </thead>

                <tbody>
               
                    
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            <div class="form-comment">
                            <form action="/userprofile" method="post">
                            <input class="form-control" type="hidden" name="content" id="" placeholder="Comentario">   
                            <input class="form-control" type="text" name="order_id" id="" placeholder="Comentario">
                            <select name="category_id" id="category_id" name="rating" class="form-control" required>
                            <option value="Mala">Mala</option>
                            <option value="Regular">Regular</option>
                            <option value="Buena">Buena</option>
                            <option value="Muy Buena">Muy buena</option>
                            <option value="Excelente">Excelente</option>
                            </select>
                            <button class= "btn btn-primary" type="submit">Califica</button>               
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