@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Editar</div>
                <div class="panel-body ">

                  <div class="col-md-6">

                  
                  {!! Form::model($participante->toArray(),['method' => 'PATCH', 'route' => ['participantes.update',$participante->id], 'class' => 'form-horizontal col-md-11']) !!}
                  
                  @include('participantes.partials.form')
                  @include('participantes.partials.edit_form')

                  <div class="col-md-12">               

                      <div class="btn-group pull-right">
                          <a class="btn btn-warning" href="{!! url('participantes') !!}" role="button">Cancelar</a>
                          {!! Form::submit("Actualizar", ['class' => 'btn btn-success']) !!}
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