

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Motivos</div>
                <div class="panel-body">
                
                <a href="{{route('motivos.create') }}" class="btn btn-success xs">Nuevo</a>

                <table class="table table-hover table-striped">
                    <thead> 
                        <tr>  
                            
                            <th>Motivo</th>
                            <th colspan="2">&nbsp;</th>                        
                        </tr>
                    </thead>
                    <tbody> 
                       
                        @foreach($motivos as $motivo)
                        <tr>
                           
                            <td>{{$motivo->motivo}}</td> 
                            
                            <td> 
                            
                            
                            </td>  
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!!$motivos->render()!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection