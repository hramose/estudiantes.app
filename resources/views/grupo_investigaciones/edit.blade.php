@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar Grupo de Investigaci&oaacute;n educativo</div>
                <div class="panel-body ">
                    {!! Form::model($grupo_investigacion,['method' => 'PATCH', 'route' => ['grupo_investigaciones.update',$grupo_investigacion->id], 'class' => 'form-horizontal col-md-6']) !!}
                
                    @include('grupo_investigaciones.partials.form')                                
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
