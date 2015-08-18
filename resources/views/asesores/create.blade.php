@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Asociar gestor de L&iacute;nea</div>
                <div class="panel-body ">
                    {!! Form::open(['method' => 'POST', 'route' => 'asesores.store', 'class' => 'form-horizontal col-md-6']) !!}

                    @include('asesores.partials.form')

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
