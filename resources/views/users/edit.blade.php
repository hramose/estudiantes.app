@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
           
            <div class="panel panel-default">
                <div class="panel-heading">Editar usuario</div>
                <div class="panel-body ">

                  {!! Form::model($user,['method' => 'PATCH', 'route' => ['users.update',$user->id], 'class' => 'form']) !!}

                    @include('users.partials.form')
                    @include('users.partials.edit_form')
                
                    <div class="btn-group  col-md-3 pull-right">
                        <a href="/users" class="btn btn-warning">Cancelar</a>
                        {!! Form::submit("Actualizar", ['class' => 'btn btn-success']) !!}
                    </div>
                
                {!! Form::close() !!}
                <br>
                {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy',$user->id], 'class' => 'col-md-9']) !!}                       
                    {!! Form::submit("Eliminar", ['class' => 'btn btn-danger pull-left']) !!}

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
