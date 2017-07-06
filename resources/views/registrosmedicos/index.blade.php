

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
                            <th>Fecha Atencion</th>
                            <th>Hora</th>
                            <th>Motivo</th>
                            <th>Comentarios</th>
                            <th>Registrado por</th>
                            <th>Presion</th>
                            <th>Peso</th>
                            <th>Estatura</th>
                            <th>Estado</th>
                            <th colspan="2">&nbsp;</th>                        
                        </tr>
                    </thead>
                    <tbody> 
                       
                        @foreach($registros as $registro)
                        <tr>
                            <td>{{$registro->nit}}</td>  
                            <td>{{$registro->f_atencion}}</td> 
                            <td>{{$registro->hora}}</td>
                            <td>{{$registro->motivo}}</td>
                            <td>{{$registro->comentarios}}</td>
                            <td>{{$registro->user_id}}</td>   
                            <td>{{$registro->presion_arterial}}</td>   
                            <td>{{$registro->peso}}</td>   
                            <td>{{$registro->estatura}}</td>   
                            <td>{{$registro->estado}}</td>   
                            
                            <td> 
       
                            <a href="{{ route('registrosmedicos.show' , $registro->id) }}" class="btn btn-success pull-right">Ver</a> 
                            
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