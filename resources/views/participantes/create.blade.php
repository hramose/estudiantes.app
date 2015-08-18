@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Registrar participante</div>
                <div class="panel-body ">

                  <div class="col-md-6">

                  
                  {!! Form::open(['method' => 'POST', 'route' => 'participantes.store', 'class' => 'form-horizontal col-md-11']) !!}

                  @include('participantes.partials.form')
                  @include('participantes.partials.create_form')


                  <div class="col-md-12">              

                      <div class="btn-group pull-right">
                          <a class="btn btn-warning" href="{!! url('participantes') !!}" role="button">Cancelar</a>
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

   @include('participantes.partials.scripts')

@endsection

