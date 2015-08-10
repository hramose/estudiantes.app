@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Editar persona</div>
                <div class="panel-body ">

                  <div class="col-md-6">

                  
                  {!! Form::model($persona,['method' => 'PATCH', 'route' => ['personas.update',$persona->id], 'class' => 'form-horizontal col-md-11']) !!}

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
                        <div class="checkbox">
                            <label for="sexo" class="checkbox-inline">
                                {!! Form::radio('sexo', 'F',  null, [
                                    'class' => 'form-control',
                                    'id'    => 'sexo',
                                ]) !!} Femenino
                            </label>

                            <label for="rol" class="checkbox-inline">
                                {!! Form::radio('sexo', 'M',  null, [
                                    'class' => 'form-control',
                                    'id'    => 'sexo',
                                ]) !!} Masculino
                            </label>
                        </div>
                      </div>

                </div>
                <div class="col-md-6"> 

                      <div class="form-group">
                          {!! Form::label('telefono', 'Telefono:') !!}
                          {!! Form::text('telefono', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'5-777777']) !!}
                          <small class="text-danger">{{ $errors->first('telefono') }}</small>
                      </div>

                      <div class="form-group">
                         {!! Form::label('correo', 'Correo:') !!}
                         {!! Form::text('correo', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'correo@ejemplo.com']) !!}
                         <small class="text-danger">{{ $errors->first('correo') }}</small>
                      </div>

                      <div class="form-group">
                          {!! Form::label('lugarNacimiento', 'Lugar de Nacimiento:') !!}
                          {!! Form::text('lugarNacimiento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('lugarNacimiento') }}</small>
                      </div>

                      <div class="form-group">
                          {!! Form::label('fechaNacimiento', 'Fecha de Nacimiento:', ['class' => 'control-label']) !!}
                            {!! Form::date('fechaNacimiento', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'DD/MM/AAAA']) !!}
                            <small class="text-danger">{{ $errors->first('fechaNacimiento') }}</small>
                      </div>

                </div>

                <div class="col-md-12"> 

                      <div class="form-group">
                         {!! Form::label('observaciones', 'Observaciones:') !!}
                         {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'required' => 'required']) !!}
                         <small class="text-danger">{{ $errors->first('observaciones') }}</small>
                      </div>                 

                      <div class="btn-group pull-right">
                          <a class="btn btn-warning" href="{!! url('personas') !!}" role="button">Cancelar</a>
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

