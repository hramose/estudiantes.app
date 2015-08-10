@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Asociar gestor de L&iacute;nea</div>
                <div class="panel-body ">
                    {!! Form::open(['method' => 'POST', 'route' => 'asesores.store', 'class' => 'form-horizontal col-md-6']) !!}

                    <div class="form-group">
                      {!! Form::label('user_id', 'Usuario:') !!}
                      {!! Form::select('user_id',[ $users ],null, ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('user_id') }}</small>
                    </div>

                    <div class="form-group">
                      {!! Form::label('establecimiento_id', 'Establecimientos:') !!}
                      {!! Form::select('establecimiento_id',[ $establecimientos ],null, ['class' => 'form-control', 'required' => 'required','multiple']) !!}
                      <small class="text-danger">{{ $errors->first('establecimiento_id') }}</small>
                    </div>

                    <div class="btn-group pull-right">
                        <a class="btn btn-warning" href="{!! url('asesores') !!}" role="button">Cancelar</a>          
                        {!! Form::submit("Asociar", ['class' => 'btn btn-success']) !!}
                    </div>
                
                    {!! Form::close() !!}  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
