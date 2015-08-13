@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Asesores de L&iacute;nea</div>
                <div class="panel-body ">
                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>Nombre</th>
                                <th>Establecimientos</th>
                                <th>Municipios</th>
                                <th>Nodo</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($asesores as $asesor)
                              <tr>
                                <td><a href="asesores/"{{ $asesor->id }} "/show"> {{ $asesor->user->name }}</a></td>
                                <td>{{ $asesor->establecimiento->count()}}</td>
                                <td>{{ $asesor->establecimiento->municipio->count() }}</td>
                                <td>{{ $asesor->establecimiento->municipio->nodo }}</td>
                              </tr> 
                            @endforeach
                          </tbody>
                      </table> 
                      {!! $asesores->render() !!}

                    <div class="btn-group pull-right">
                        <a class="btn btn-info" href="{!! url('asesores/create')!!}" role="button">Nuevo</a>          
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
