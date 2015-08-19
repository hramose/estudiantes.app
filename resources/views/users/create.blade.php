@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
           
            <div class="panel panel-default">
                <div class="panel-heading">Crear usuario</div>
                <div class="panel-body ">

                {!! Form::open(['method' => 'POST', 'route' => 'users.store', 'class' => 'form']) !!}
                    
                    @include('users.partials.form')
                
                <div class="col-md-12">
                    <div class="btn-group pull-right">
                        <a href="/users" class="btn btn-warning">Cancelar</a>
                        {!! Form::submit("Registrar", ['class' => 'btn btn-success']) !!}
                    </div>
                </div>
                
                {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

  @include('users.partials.scripts')
  
@endsection
