@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro Medico</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ ('registro') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
                            <label for="nit" class="col-md-2 control-label">Nit</label>
                             <div class="col-md-9">
                                <div class="col-md-4">
                                    <input id="nit" type="text" class="form-control" name="nit" value="{{$registros->nit}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        </div>

                        <div class="form-group">
                            <div class="form-line{{ $errors->has('f_atencion') ? ' has-error' : '' }}">
                                    <label for="f_atencion" class="col-md-2 control-label">Fecha</label>
                                    <div class="col-md-4">
                                        <input id="f_atencion" type="date" class="form-control" name="f_atencion" value="{{$registros->f_atencion}}" required autofocus>
                                    </div>
                            </div>

                            <div class="form-line{{ $errors->has('hora') ? ' has-error' : '' }}">
                                <label for="hora" class="col-md-1 control-label">Hora</label>

                                <div class="col-md-4">
                                    <input id="hora" type="text" class="form-control" name="hora" value="{{$registros->hora}}" required autofocus>

                                </div>
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('motivo') ? ' has-error' : '' }}">
                            <label for="motivo" class="col-md-2 control-label">Motivo</label>

                            <div class="col-md-9">
                                
                                        <input id="motivo" type="text" class="form-control" name="motivo" required autofocus value="{{$registros->motivo}}">
                                

                            </div>
                        </div>

                       
                       <div class="form-group{{ $errors->has('presion_arterial') ? ' has-error' : '' }}">
                            <label for="presion_arterial" class="col-md-2 control-label">Presion</label>

                            <div class="col-md-4">
                                <input id="presion_arterial" type="text" class="form-control" name="presion_arterial" value="{{$registros->presion_arterial}}" required autofocus>

                            </div>
                            
                            <div class="form-line{{ $errors->has('peso') ? ' has-error' : '' }}">
                                <label for="peso" class="col-md-1 control-label">Peso</label>

                                <div class="col-md-4">
                                    <input id="peso" type="text" class="form-control" name="peso" value="{{$registros->peso}}" required autofocus>

                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('estatura') ? ' has-error' : '' }}">
                            <label for="estatura" class="col-md-2 control-label">Estatura</label>

                            <div class="col-md-4">
                                <input id="estatura" type="text" class="form-control" name="estatura" value="{{$registros->estatura}}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('comentarios') ? ' has-error' : '' }}">
                            <label for="comentarios" class="col-md-2 control-label">Comentarios</label>

                            <div class="col-md-9">
                                <textarea id="comentarios" type="memo" class="form-control" name="comentarios" required autofocus>{{$registros->comentarios}}</textarea> 

                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                            <label for="estado" class="col-md-2 control-label">Estado</label>
                            <div class="col-md-9">
                                <select class="form-control" name="estado" >
                                    <option>Pendiente</option>
                                    <option>Anulado</option>
                                    <option>Completado</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('receta') ? ' has-error' : '' }}">
                            <label for="sintomas" class="col-md-2 control-label">Sintomas</label>

                            <div class="col-md-9">
                                <textarea id="sintomas" type="memo" class="form-control" name="sintomas" required autofocus>{{ old('comentarios') }}</textarea> 

                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('sintomas') ? ' has-error' : '' }}">
                            <label for="diagnostico" class="col-md-2 control-label">Diagnostico</label>

                            <div class="col-md-9">
                                <textarea id="diagnostico" type="memo" class="form-control" name="diagnostico" required autofocus>{{ old('comentarios') }}</textarea> 

                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('receta') ? ' has-error' : '' }}">
                            <label for="diagnostico" class="col-md-2 control-label">Receta</label>

                            <div class="col-md-9">
                                <textarea id="receta" type="memo" class="form-control" name="receta" required autofocus>{{ old('comentarios') }}</textarea> 

                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('proximacita') ? ' has-error' : '' }}">
                            <label for="proximacita" class="col-md-2 control-label">Proxima Cita</label>

                            <div class="col-md-9">
                                <input id="proximacita" type="text" class="form-control" name="proximacita" >

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-success">
                                    Finalizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
