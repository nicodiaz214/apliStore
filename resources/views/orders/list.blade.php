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
                        <th>ID de Compra</th>
                        <th>Nombre Aplicación</th>
                        <th>Precio</th>
                        <th>Comentario</th>
                        <th>Rating</th>
                        <th>Calificación</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
               
                @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->application_id}}</td>
                            <td>{{$order->price}}</td>
                        @if ($order->comment()->first())
                            <td>{{$order->comment()->first()->getContent()}}</td>
                            <td>{{$order->comment()->first()->getRating()}}</td>
                        @else
                            <td></td>
                            <td></td>
                        @endif
                            <td>
                                <div class="form-comment">
                                @if (! $order->comment()->first())
                                        <form action="/userprofile/list" method="post">
                                        @csrf
                                        @method('post')
                                            <input class="form-control" type="text" name="content" placeholder="Comentario">
                                            <select class="form-control" name="rating">
                                                <option value="1">Mala</option>
                                                <option value="2">Regular</option>
                                                <option value="3">Buena</option>
                                                <option value="4">Muy buena</option>
                                                <option value="5">Excelente</option>
                                            </select>
                                        <button class= "btn btn-primary" type="submit" name="order_id" value="{{$order->id}}">Califica</button>               
                                        </form>
                                 @endif
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