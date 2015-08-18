@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Asesores de L&iacute;nea</div>
                <div class="panel-body ">
                    <div class="btn-group pull-left">
                        <a class="btn btn-info" href="{!! url('asesores/create')!!}" role="button">Nuevo</a>          
                    </div> 
                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>Nombre</th>
                                <th>Establecimientos</th>
                                <th>Municipios</th>
                                <th>Ruta</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($asesores as $asesor)
                              <tr>
                                <td><a href=" asesores/{{ $asesor->user_id }} "> {{ $asesor->user->name }}</a></td>
                                <td>{{ $asesor->establecimiento->count() }}</td>
                                <td>{{ $asesor->establecimiento->municipio->count() }}</td>
                                <td>{{ $asesor->establecimiento->municipio->ruta }}</td>
                              </tr> 
                            @endforeach
                          </tbody>
                      </table> 
                      {!! $asesores->render() !!}          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
