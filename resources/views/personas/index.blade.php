@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
           
            <div class="panel panel-default">
                <div class="panel-heading">Personas</div>
                <div class="panel-body ">
                     <div class="btn-group pull-left">
                        <a class="btn btn-info" href="{!! url('personas/create')!!}" role="button">Nuevo</a>          
                    </div>

                    {!! Form::open(['method' => 'GET', 'route' => 'personas.index', 'class' => 'form-inline pull-right']) !!}
                        <div class="form-group">
                            {!! Form::text('documento', null, ['class' => 'form-control','placeholder'=>'N&uacute;mero de documento', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('documento') }}</small>
                        </div>
                            {!! Form::submit("Buscar", ['class' => 'btn btn-default']) !!}
                    {!! Form::close() !!}                                          
                  </div>
                </form>

                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Documento</th>
                                <th>Tipo</th>
                                <th>Nombre </th>
                                <th>Fecha de Nacimiento</th>
                                <th>Tipo de Usuario</th>
                                <th>Establecimiento</th>
                                <th>Grupo de Investigación</th>
                                <th>Acciones</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($personas as $persona)
                              <tr>
                                <td>{{ $persona->id }}</td>
                                <td>{{ $persona->documento }}</td>
                                <td>{{ $persona->tipoDocumento }}</td>
                                <td>{{ $persona->full_name }}</td>
                                <td>{{ $persona->fechaNacimiento }}</td>
                                <td>{{ $persona->tipo }}</td>
                                <td>{{ $persona->establecimiento->nombre }}</td>
                                <td>{{ $persona->investigador->grupoInvestigacion->first()->nombre }}</td>
                                <td><a href="personas/{{ $persona->id }}/edit">Editar</a></td>
                               </tr> 
                            @endforeach
                          </tbody>
                      </table> 

                      {!! $personas->render() !!}
      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

