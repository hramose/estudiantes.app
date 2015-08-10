@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar establecimiento educativo</div>
                <div class="panel-body ">
                    {!! Form::model($establecimiento,['method' => 'PATCH', 'route' => ['establecimientos.update',
                    $establecimiento->id], 'class' => 'form-horizontal col-md-6']) !!}
                
                    <div class="form-group">
                        {!! Form::label('nombre', 'Establecimiento:') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger"> {{ $errors->first('nombre') }}</small>
                    </div>  

                     <div class="form-group">
                        {!! Form::label('dane', 'Dane:') !!}
                        {!! Form::text('dane', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger"> {{ $errors->first('dane') }}</small>
                    </div>  

                    <div class="form-group">
                      {!! Form::label('municipio_id', 'Municipio:') !!}
                      {!! Form::select('municipio_id',[ $municipios ],null, ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('municipio_id') }}</small>
                    </div>                                  
                    <div class="btn-group pull-right">
                        <a class="btn btn-warning" href="{!! url('establecimientos') !!}" role="button">Cancelar</a>          
                        {!! Form::submit("Actualizar", ['class' => 'btn btn-success']) !!}
                    </div>
                
                    {!! Form::close() !!}
                     <br>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['establecimientos.destroy',$establecimiento->id ], 'class' => 'form-horizontal col-md-6']) !!}
                              {!! Form::submit("Eliminar", ['class' => 'btn btn-danger pull-left']) !!}
                          </div>          
                      {!! Form::close() !!}  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

