@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar Grupo de Investigaci&oaacute;n educativo</div>
                <div class="panel-body ">
                    {!! Form::model($grupo_investigacion,['method' => 'PATCH', 'route' => ['grupo_investigaciones.update',$grupo_investigacion->id], 'class' => 'form-horizontal col-md-6']) !!}
                
                    <div class="form-group">
                        {!! Form::label('nombre', 'Grupo de Investigaci&oacute;n:') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger"> {{ $errors->first('nombre') }}</small>
                    </div>  

                     <div class="form-group">
                        {!! Form::label('codigoCV', 'C&oacute;digo de Comunidad Virtual:') !!}
                        {!! Form::text('codigoCV', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger"> {{ $errors->first('dane') }}</small>
                    </div>  

                    <div class="form-group">
                      {!! Form::label('establecimiento_id', 'Municipio:') !!}
                      {!! Form::select('establecimiento_id',[ $establecimientos ],null, ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('establecimiento_id') }}</small>
                    </div>                                  
                    <div class="btn-group pull-right">
                        <a class="btn btn-warning" href="{!! url('grupo_investigaciones') !!}" role="button">Cancelar</a>          
                        {!! Form::submit("Actualizar", ['class' => 'btn btn-success']) !!}
                    </div>
                
                    {!! Form::close() !!} 
                    
                    {!! Form::open(['method' => 'DELETE', 'route' => ['grupo_investigaciones.destroy', $grupo_investigacion->id], 'class' => 'form-horizontal col-md-6']) !!}
                        <br>
                            {!! Form::submit("Eliminar", ['class' => 'btn btn-danger pull-left']) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
