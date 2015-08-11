@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Participantes</div>
                <div class="panel-body ">
                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Documento</th>
                                <th>Nombre </th>
                                <th>Establecimiento</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($participantes as $participante)
                              <tr>
                                <td>{{ $participante->id }}</td>
                                <td><a href="participantes/{{ $participante->id}}/edit">{{ $participante->persona->documento }}</a></td>
                                <td>{{ $participante->persona->full_name}}</td>
                                <td>{{ $participante->establecimiento->nombre }}</td>
                               </tr> 
                            @endforeach
                          </tbody>
                      </table> 
                      {!! $participantes->render() !!}

                    <div class="btn-group pull-right">
                        <a class="btn btn-info" href="{!! url('participantes/create')!!}" role="button">Nuevo</a>          
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

