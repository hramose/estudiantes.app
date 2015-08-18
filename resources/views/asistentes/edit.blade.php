@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar participante</div>
                <div class="panel-body ">
                    {!! Form::model($participante,['method' => 'PATCH', 'route' => ['participantes.update',$participante->id], 'class' => 'form-horizontal col-md-6']) !!}

                    <div class="form-group">
                        {!! Form::label('persona_id', 'Persona: ') !!}
                        {!! Form::text('persona_id', $participante->persona->full_name, ['class' => 'form-control', 'required' => 'required', 'disabled' => 'disabled']) !!}
                        <small class="text-danger">{{ $errors->first('persona_id') }}</small>
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
                          {!! Form::label('establecimiento_id', 'Establecimiento:') !!}
                          {!! Form::select('establecimiento_id', $establecimientos, null, ['class' => 'form-control', 'required' => 'required' ]) !!}
                          <small class="text-danger">{{ $errors->first('establecimiento_id') }}</small>
                      </div>

                    <div class="form-group">
                          {!! Form::label('grupoInvestigacion_id', 'Grupo de Investigaci&oacute;n:') !!}
                          {!! Form::select('grupoInvestigacion_id', $grupoInvestigaciones,null, ['class' => 'form-control', 'required' => 'required','multiple' ]) !!}
                          <small class="text-danger">{{ $errors->first('grupoInvestigacion_id') }}</small>
                     </div>                                        
                    <div class="btn-group pull-right">
                        <a class="btn btn-warning" href="{!! url('participantes') !!}" role="button">Cancelar</a>          
                        {!! Form::submit("Registrar", ['class' => 'btn btn-success']) !!}
                    </div>
                
                    {!! Form::close() !!}       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
