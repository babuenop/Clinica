@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 ">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    <h2>
                        {{$user->id}} - {{$user->name}}
                        
                    </h2> 
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
                   <br> 
            </div>
        </div>
    </div>
</div>

@endsection