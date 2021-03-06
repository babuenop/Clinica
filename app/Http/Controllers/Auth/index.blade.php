@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Usuarios</div>
                <div class="panel-body">
                <a href="{{ route('users.create') }}" class="btn btn-primary xs">Nuevo</a>
                <table class="table table-hover table-striped">
                    <thead> 
                        <tr>  
                            <th with="20px">ID</th>
                            <th></th>
                            <th colspan="2">&nbsp;</th>                        
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>  
                            <td>{{$user->name}}</td>  
                            <td> 
                            <a href="{{ route('users.show') }}" class="btn btn-primary sm">Ver </a> 
                            
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