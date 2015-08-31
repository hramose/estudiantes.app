@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Establecimientos: {{ $establecimientos->count() }}</div>
                <div class="panel-body ">
                    <div class="btn-group pull-left">
                        <a class="btn btn-info" href="{!! url('establecimientos/create')!!}" role="button">Nuevo</a>          
                    </div>   
                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Dane</th>
                                <th>Municipio</th>
                                <th>Acciones</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($establecimientos as $establecimiento)
                              <tr>
                                <td>{{ $establecimiento->id }}</td>
                                <td>{{ $establecimiento->nombre }}</a></td>
                                <td>{{ $establecimiento->dane }}</td>
                                 <td>{{ $establecimiento->municipio->nombre }}</td>
                                 <td><a href="establecimientos/{{ $establecimiento->id }}/edit">Editar</a></td>
                              </tr> 
                            @endforeach
                          </tbody>
                      </table> 

                      {!! $establecimientos->render() !!} 

        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
