@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Establecimientos</div>
                <div class="panel-body ">
                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Dane</th>
                                <th>Municipio</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($establecimientos as $establecimiento)
                              <tr>
                                <td>{{ $establecimiento->id }}</td>
                                <td><a href="establecimientos/{{ $establecimiento->id }}/edit">{{ $establecimiento->nombre }}</a></td>
                                <td>{{ $establecimiento->dane }}</td>
                                 <td>{{ $establecimiento->municipio->nombre }}</td>
                              </tr> 
                            @endforeach
                          </tbody>
                      </table> 

                      {{ $establecimientos->render()}} 

                    <div class="btn-group pull-right">
                        <a class="btn btn-info" href="{!! url('establecimientos/create')!!}" role="button">Nuevo</a>          
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
