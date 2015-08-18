@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Asesor: </strong> {{ $asesores->first()->user->name }} <strong>Correo: </strong> {{ $asesores->first()->user->email }}  </div>
                <div class="panel-body ">
                    <div class="btn-group pull-right">
                        <a class="btn btn-warning" href="/asesores/{{ $asesores->first()->user_id}}/edit" role="button">Editar</a>          
                    </div> 

                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>Grupos de Investigación</th>
                                <th>Establecimiento</th>
                                <th>Municipio</th>
                                <th>Ruta</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($asesores as $asesor)
                              <tr>
                                <td>{{ $asesor->establecimiento->grupoInvestigacion->count() }}</td>
                                <td>{{ $asesor->establecimiento->nombre }}</td>
                                <td>{{ $asesor->establecimiento->municipio->nombre }}</td>
                                <td>{{ $asesor->establecimiento->municipio->ruta }}</td>
                              </tr> 
                            @endforeach
                          </tbody>
                      </table> 
                      <a href="/asesores" class="btn btn-link pull-right">volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
