@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Grupo de Investigaci&oaacute;n educativo</div>
                <div class="panel-body ">
                    {!! Form::open(['method' => 'POST', 'route' => 'grupo_investigaciones.store', 'class' => 'form-horizontal col-md-6']) !!}
                
                    <div class="form-group">
                        {!! Form::label('nombre', 'Grupo de Investigaci&oacute;n:') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger"> {{ $errors->first('nombre') }}</small>
                    </div>  

                     <div class="form-group">
                        {!! Form::label('codigoCV', 'C&oacute;digo de Comunidad Virtual:') !!}
                        {!! Form::text('dane', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger"> {{ $errors->first('dane') }}</small>
                    </div>  

                    <div class="form-group">
                      {!! Form::label('establecimiento_id', 'Establecimiento:') !!}
                      {!! Form::select('establecimiento_id',[ $establecimientos ],null, ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('establecimiento_id') }}</small>
                    </div>                                  
                    <div class="btn-group pull-right">
                        <a class="btn btn-warning" href="{!! url('grupo_investigaciones') !!}" role="button">Cancelar</a>         
                        {!! Form::submit("Registrar", ['class' => 'btn btn-success']) !!}
                    </div>
                
                    {!! Form::close() !!}  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
