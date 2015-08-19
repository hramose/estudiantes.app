@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
           
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios: {{ $users->count()}}</div>
                <div class="panel-body ">
                     <div class="btn-group pull-left">
                        <a class="btn btn-info" href="{!! url('users/create')!!}" role="button">Nuevo</a>          
                    </div>

                    {!! Form::open(['method' => 'GET', 'route' => 'users.index', 'class' => 'form-inline pull-right']) !!}
                        <div class="form-group">
                            {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Nombre', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                            {!! Form::submit("Buscar", ['class' => 'btn btn-default']) !!}
                    {!! Form::close() !!}                                          
                  </div>
                </form>

                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Grupos de Investigaci&oacute;n</th>
                                <th>Establecimientos</th>
                                <th>Municipios</th>
                                <th>Ruta</th>
                                <th>Acciones</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                              <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->asesor->establecimiento->grupoInvestigacion->count() }}</td>
                                <td>{{ $user->asesor->establecimiento->count() }}</td>
                                <td>{{ $user->asesor->establecimiento->municipio->count() }}</td>
                                <td>{{ $user->asesor->establecimiento->municipio->ruta }}</td>
                                <td><a href="users/{{ $user->id }}/edit">Editar</a></td>
                               </tr> 
                            @endforeach
                          </tbody>
                      </table> 

                      {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

