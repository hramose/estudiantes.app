@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Personas</div>
                <div class="panel-body ">
                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Documento</th>
                                <th>Tipo</th>
                                <th>Nombre </th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Fecha de Nacimiento</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($personas as $persona)
                              <tr>
                                <td>{{ $persona->id }}</td>
                                <td><a href="personas/{{ $persona->id }}/edit">{{ $persona->documento }}</a></td>
                                <td>{{ $persona->tipoDocumento }}</td>
                                <td>{{ $persona->full_name }}</td>
                                <td>{{ $persona->telefono }}</td>
                                <td>{{ $persona->correo }}</td>
                                <td>{{ $persona->fechaNacimiento }}</td>
                               </tr> 
                            @endforeach
                          </tbody>
                      </table> 

                      {!! $personas->render() !!}

                    <div class="btn-group pull-right">
                        <a class="btn btn-info" href="{!! url('personas/create')!!}" role="button">Nuevo</a>          
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

