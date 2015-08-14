@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Municipios</div>
                <div class="panel-body ">
                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Ruta</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($municipios as $municipio)
                              <tr>
                                <td>{{ $municipio->id }}</td>
                                <td><a href="municipios/{{ $municipio->id }}/edit">{{ $municipio->nombre }}</a></td>
                                <td>{{ $municipio->ruta }}</td>
                              </tr> 
                            @endforeach
                          </tbody>
                      </table> 

                      {!! $municipios->render() !!} 

                    <div class="btn-group pull-right">
                        <a class="btn btn-info" href="{!! url('municipios/create')!!}" role="button">Nuevo</a>          
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
