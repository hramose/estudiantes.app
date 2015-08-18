@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Grupo de Investigaci&oaacute;n educativo</div>
                <div class="panel-body ">
                    {!! Form::open(['method' => 'POST', 'route' => 'grupo_investigaciones.store', 'class' => 'form-horizontal col-md-6']) !!}
                
                    @include('grupo_investigaciones.partials.form')
                    
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
