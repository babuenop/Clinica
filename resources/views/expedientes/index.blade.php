

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Expedientes</div>
                <div class="panel-body">
                
                <a href="{{route('expedientes.create') }}" class="btn btn-success xs">Nuevo</a>

                <table class="table table-hover table-striped">
                    <thead> 
                        <tr>  
                            <th with="20px">Nit</th>
                            <th>Nombre</th>
                            <th>Fecha Nacimiento</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Direccion</th>
                            <th colspan="2">&nbsp;</th>                        
                        </tr>
                    </thead>
                    <tbody> 
                       
                        @foreach($expedientes as $expediente)
                        <tr>
                            <td>{{$expediente->nit}}</td>  
                            <td>{{$expediente->nombre}}</td> 
                            <td>{{$expediente->fnacimiento}}</td>
                            <td>{{$expediente->telefono}}</td>
                            <td>{{$expediente->email}}</td>
                            <td>{{$expediente->direccion}}</td>   
                            
                            <td> 
                            <a href="{{ route('expedientes.show' , $expediente->nit) }}" class="btn btn-success pull-right">Ver</a> 
                            
                            </td>  
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!!$expedientes->render()!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection