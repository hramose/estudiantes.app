@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Municipios</div>
                <div class="panel-body ">
                    <div class="btn-group pull-left">
                        <a class="btn btn-info" href="{!! url('municipios/create')!!}" role="button">Nuevo</a>          
                    </div>
                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Ruta</th>
                                <th>Acciones</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($municipios as $municipio)
                              <tr>
                                <td>{{ $municipio->id }}</td>
                                <td>{{ $municipio->nombre }}</td>
                                <td>{{ $municipio->ruta }}</td>
                                <td><a href="municipios/{{ $municipio->id }}/edit">Editar</a></td>
                              </tr> 
                            @endforeach
                          </tbody>
                      </table> 

                      {!! $municipios->render() !!}            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
