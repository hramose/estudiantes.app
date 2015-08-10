@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Participantes</div>
                <div class="panel-body ">

                  <div class="col-md-6">

                  
                  {!! Form::open(['method' => 'POST', 'route' => 'personas.store', 'class' => 'form-horizontal col-md-11']) !!}

                      <div class="form-group">
                          {!! Form::label('documento', 'Nº de documento:') !!}
                          {!! Form::text('documento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('documento') }}</small>
                      </div>

                      <div class="form-group">
                          {!! Form::label('tipoDocumento', 'Tipo de documento:') !!}
                          {!! Form::select('tipoDocumento',[ ''=>'','TI'=>'Tarjeta de Identidad','CC'=>'Cedula de Ciudadan&iacute;a','RC'=>'Registro Civil'], null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('tipoDocumento') }}</small>
                      </div>

                      <div class="form-group">
                          {!! Form::label('nombre', 'Nombre:') !!}
                          {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('nombre') }}</small>
                      </div>

                      <div class="form-group">
                          {!! Form::label('apellido', 'Apellido:') !!}
                          {!! Form::text('apellido', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('apellido') }}</small>
                      </div>

                      <div class="form-group">
                          {!! Form::label('telefono', 'Telefono:') !!}
                          {!! Form::text('telefono', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('telefono') }}</small>
                      </div>

                      <div class="form-group">
                         {!! Form::label('correo', 'Correo') !!}
                         {!! Form::text('correo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                         <small class="text-danger">{{ $errors->first('correo') }}</small>
                      </div>

                </div>
                <div class="col-md-6">

                      <div class="form-group">
                          {!! Form::label('establecimiento_id', 'Establecimiento:') !!}
                          {!! Form::select('establecimiento_id', $establecimientos, null, ['class' => 'form-control', 'required' => 'required' ]) !!}
                          <small class="text-danger">{{ $errors->first('establecimiento_id') }}</small>
                      </div>
                      <div class="form-group">
                        <div class="checkbox">
                            <label for="rol" class="checkbox-inline">
                                {!! Form::radio('rol', 'estudiante',  null, [
                                    'class' => 'form-control',
                                    'id'    => 'rol',
                                ]) !!} Estudiante
                            </label>

                            <label for="rol" class="checkbox-inline">
                                {!! Form::radio('rol', 'docente',  null, [
                                    'class' => 'form-control',
                                    'id'    => 'rol',
                                ]) !!} Docente
                            </label>
                        </div>
                      </div>

                      <div class="form-group">
                         {!! Form::label('observaciones', 'Observaciones:') !!}
                         {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'required' => 'required']) !!}
                         <small class="text-danger">{{ $errors->first('observaciones') }}</small>
                      </div>                 

                      <div class="btn-group pull-right">
                          {!! Form::submit("Registrar", ['class' => 'btn btn-success']) !!}
                      </div>
                  
                  {!! Form::close() !!}

              </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

