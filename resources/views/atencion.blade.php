@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Atencion</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
                            <label for="nit" class="col-md-4 control-label">Nit</label>

                            <div class="col-md-6">
                                <input id="nit" type="text" class="form-control" name="nit" value="{{ old('nit') }}" required autofocus>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('f_atencion') ? ' has-error' : '' }}">
                            <label for="f_atencion" class="col-md-4 control-label">Fecha de atencion</label>

                            <div class="col-md-6">
                                <input id="f_atencion" type="date" class="form-control" name="f_atencion" value="{{ old('f_atencion') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hora') ? ' has-error' : '' }}">
                            <label for="hora" class="col-md-4 control-label">Hora</label>

                            <div class="col-md-6">
                                <input id="hora" type="text" class="form-control" name="hora" value="{{ old('hora') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('motivo') ? ' has-error' : '' }}">
                            <label for="motivo" class="col-md-4 control-label">Motivo</label>

                            <div class="col-md-6">
                                <input id="motivo" type="text" class="form-control" name="motivo" value="{{ old('motivo') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('comentarios') ? ' has-error' : '' }}">
                            <label for="comentarios" class="col-md-4 control-label">Comentarios</label>

                            <div class="col-md-6">
                                <input id="comentarios" type="memo" class="form-control" name="comentarios" value="{{ old('comentarios') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                            <label for="user_id" class="col-md-4 control-label">Usuario que registro</label>

                            <div class="col-md-6">
                                <input id="user_id" type="text" class="form-control" name="user_id" value="{{ old('user_id') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('presion_arterial') ? ' has-error' : '' }}">
                            <label for="presion_arterial" class="col-md-4 control-label">Presion Arterial</label>

                            <div class="col-md-6">
                                <input id="presion_arterial" type="text" class="form-control" name="presion_arterial" value="{{ old('presion_arterial') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('peso') ? ' has-error' : '' }}">
                            <label for="peso" class="col-md-4 control-label">Peso</label>

                            <div class="col-md-6">
                                <input id="peso" type="text" class="form-control" name="peso" value="{{ old('peso') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('estatura') ? ' has-error' : '' }}">
                            <label for="estatura" class="col-md-4 control-label">Estatura</label>

                            <div class="col-md-6">
                                <input id="estatura" type="text" class="form-control" name="estatura" value="{{ old('estatura') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                            <label for="estado" class="col-md-4 control-label">Estado</label>

                            <div class="col-md-6">
                                <input id="estado" type="text" class="form-control" name="estado" value="{{ old('estado') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
