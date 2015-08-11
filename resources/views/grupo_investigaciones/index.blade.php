@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Grupos de Investigación</div>
                <div class="panel-body ">
                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>C&oacute;digo de Comunidad Virtual</th>
                                <th>Establecimiento Educativo</th>
                                <th>Municipio</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($grupo_investigaciones as $grupo_investigacion)
                              <tr>
                                <td>{{ $grupo_investigacion->id }}</td>
                                <td><a href="grupo_investigaciones/{{ $grupo_investigacion->id }}/edit">{{ $grupo_investigacion->nombre }}</a></td>
                                <td>{{ $grupo_investigacion->codigoCV }}</td>
                                <td>{{ $grupo_investigacion->establecimiento->nombre }}</td>
                                <td>{{ $grupo_investigacion->establecimiento->municipio->nombre }}</td>
                              </tr> 
                            @endforeach
                          </tbody>
                      </table> 

                      {!! $grupo_investigaciones->render() !!} 

                    <div class="btn-group pull-right">
                        <a class="btn btn-info" href="{!! url('grupo_investigaciones/create')!!}" role="button">Nuevo</a>          
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
