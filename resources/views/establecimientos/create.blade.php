@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar establecimiento educativo</div>
                <div class="panel-body ">
                    {!! Form::open(['method' => 'POST', 'route' => 'establecimientos.store', 'class' => 'form-horizontal col-md-6']) !!}
                
                    @include ('establecimientos.partials.form')

                    <div class="btn-group pull-right">
                        <a class="btn btn-warning" href="{!! url('establecimientos') !!}" role="button">Cancelar</a>          
                        {!! Form::submit("Registrar", ['class' => 'btn btn-success']) !!}
                    </div>
                
                    {!! Form::close() !!}  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

  @include('establecimientos.partials.scripts')
  
@endsection