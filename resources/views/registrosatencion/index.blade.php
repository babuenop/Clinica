

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Registros de Atencion</div>
                <div class="panel-body">
                
                <a href="{{route('registrosatencion.create') }}" class="btn btn-success xs">Nuevo</a>

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
                       
                        @foreach($registros as $registro)
                        <tr>
                            <td>{{$registro->nit}}</td>  
                            <td>{{$registro->nombre}}</td> 
                            <td>{{$registro->fnacimiento}}</td>
                            <td>{{$registro->telefono}}</td>
                            <td>{{$registro->email}}</td>
                            <td>{{$registro->direccion}}</td>   
                            
                            <td> 
                            <a href="{{ route('registrosatencion.show' , $expediente->nit) }}" class="btn btn-success pull-right">Ver</a> 
                            
                            </td>  
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!!$registros->render()!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection