@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 ">
            <div class="panel panel-default">
            <div class="panel-heading">Ver Usuarios</div>
            <div class="panel-body">
                    <h3>
                    <b>{{$user->id}} - {{$user->name}}</b>
                    </h3> 
                </div>
                <div class="panel-body">
                <table style="width:40%">
                    <tr>
                        <th>ID:</th><td>{{$user->id}}</td>
                    </tr>
                    <tr>
                        <th>Nombre:</th><td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th>Email:</th><td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <th>Creado el:</th><td>{{$user->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Actualizado el:</th><td>{{$user->update_at}}</td>
                    </tr>
                    
                </table> 
                <br> <a href="{{ route('user.create') }}" class="btn btn-success sm pull-right">Editar</a>
                   <br> 
            </div>
        </div>
    </div>
</div>

@endsection
