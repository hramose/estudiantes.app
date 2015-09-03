@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Municipio</div>
                <div class="panel-body ">
                    {!! Form::model($municipio,['method' => 'PATCH', 'route' => ['municipios.update',$municipio->id ], 'class' => 'form-horizontal col-md-6']) !!}
                
                    @include('municipios.partials.form')
                    
                    <div class="btn-group pull-right">
                        <a class="btn btn-warning" href="{!! url('municipios') !!}" role="button">Cancelar</a>          
                        {!! Form::submit("Actualizar", ['class' => 'btn btn-success']) !!}
                    </div>
                
                    {!! Form::close() !!}

                    <br>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['municipios.destroy',$municipio->id], 'class' => 'col-md-6']) !!}                       
                               {!! Form::submit("Eliminar", ['class' => 'btn btn-danger pull-left']) !!}
                       
                    {!! Form::close() !!} 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
