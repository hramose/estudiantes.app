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
                
                    @include ('establecimientos.partials.form')
                                 
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
@section('scripts')

  @include('establecimientos.partials.scripts')
  
@endsection

