@extends('layouts.app')

@section('content')
<div class="container">
    <body>
        <div class="col">
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/usuarios.png" alt="...">
              <div class="caption">
                <h3></h3>
                <p></p>
                <p>
                <a class="btn btn-success" href="user" role="button">Usuarios</a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/pacientes.png" alt="...">
              <div class="caption">
                <h3></h3>
                <p></p>
                <p>
               <a class="btn btn-success" href="expedientes" role="button">Registro de Expedientes</a>
                </p>
              </div>
            </div>
          </div>
        </div>
 
        <div class="col">
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/registros.png" alt="...">
              <div class="caption">
                <h3></h3>
                <p></p>
                <p>
                 <a src="usuarios.jpg" class="btn btn-success" href="#" role="button">Registro Atencion</a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/medico.png" alt="...">
              <div class="caption">
                <h3></h3>
                <p></p>
                <p>
                
                 <a class="btn btn-success" href="#" role="button">Registro Medico</a>
                </p>
              </div>
            </div>
          </div>
        </div>

    </body>

    <div class="nav nav-justified">
       
        
       
       
        </p>
    </div>     
</div>
@endsection
