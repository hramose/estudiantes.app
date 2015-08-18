@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
           
            <div class="panel panel-default">
                <div class="panel-heading">Participantes: {{ $participantes->count()}}</div>
                <div class="panel-body ">
                     <div class="btn-group pull-left">
                        <a class="btn btn-info" href="{!! url('participantes/create')!!}" role="button">Nuevo</a>          
                    </div>

                    {!! Form::open(['method' => 'GET', 'route' => 'participantes.index', 'class' => 'form-inline pull-right']) !!}
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
                                {{-- <th>Grupo de Investigación</th> --}}
                                <th>Acciones</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($participantes as $participante)
                              <tr>
                                <td>{{ $participante->id }}</td>
                                <td>{{ $participante->documento }}</td>
                                <td>{{ $participante->tipoDocumento }}</td>
                                <td>{{ $participante->full_name }}</td>
                                <td>{{ $participante->fechaNacimiento }}</td>
                                <td>{{ $participante->tipo }}</td>
                                <td>{{ $participante->establecimiento->nombre }}</td>
                                {{-- <td>{{ $participante->investigador->grupoInvestigacion->nombre}}</td> --}}
                                <td><a href="participantes/{{ $participante->id }}/edit">Editar</a></td>
                               </tr> 
                            @endforeach
                          </tbody>
                      </table> 

                      {!! $participantes->render() !!}
      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

