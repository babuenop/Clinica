@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Usuarios</div>
                <div class="panel-body">
                
                <table class="table table-hover table-striped">
                    <thead> 
                        <tr>  
                            <th with="20px">ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Creado el</th>
                            <th>Actualizado el</th>
                            <th colspan="2">&nbsp;</th>                        
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>  
                            <td>{{$user->name}}</td> 
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>   
                            <td>{{$user->updated_at}}</td>      
                            <td> 
                            <a href="{{ route('user.show' , $user->id) }}" class="btn btn-success pull-right">Ver </a> 
                            
                            </td>  
                              
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection