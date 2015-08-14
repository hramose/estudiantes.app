@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Municipio</div>
                <div class="panel-body ">
                    {!! Form::open(['method' => 'POST', 'route' => 'municipios.store', 'class' => 'form-horizontal col-md-6']) !!}
                
                    <div class="form-group">
                        {!! Form::label('nombre', 'Municipio:') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger"> {{ $errors->first('nombre') }}</small>
                    </div>  
                    <div class="form-group">
                      {!! Form::label('ruta', 'Ruta:') !!}
                      {!! Form::select('ruta', [''=>'','1' => '&Aacute;rea metrop&oacute;litana','2'=>'Oca&ntilde;a','3'=>'Pamplona'],null, ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('ruta') }}</small>
                    </div>                                  
                    <div class="btn-group pull-right">
                        <a class="btn btn-warning" href="{!! url('municipios') !!}" role="button">Cancelar</a>          
                        {!! Form::submit("Registrar", ['class' => 'btn btn-success']) !!}
                    </div>
                
                    {!! Form::close() !!}       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
