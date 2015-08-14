@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Registrar persona</div>
                <div class="panel-body ">

                  <div class="col-md-6">

                  
                  {!! Form::open(['method' => 'POST', 'route' => 'personas.store', 'class' => 'form-horizontal col-md-11']) !!}

                  @include('personas.partials.form')

                  <div class="col-md-12">              

                      <div class="btn-group pull-right">
                          <a class="btn btn-warning" href="{!! url('personas') !!}" role="button">Cancelar</a>
                          {!! Form::submit("Registrar", ['class' => 'btn btn-success']) !!}
                      </div>
                  
                  {!! Form::close() !!}

                </div> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

   @include('personas.partials.scripts')

@endsection

