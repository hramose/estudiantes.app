@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Inicio</div>
                <div class="panel-body ">
                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>Personas</th>
                                <th>Participantes</th>
                                <th>Grupos de Investigaci&oacute;n</th>
                                <th>Establecimientos </th>
                                <th>Municipios</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td class="text-center"><a href="{{ url('personas') }}">{{ $personas }}</a></td>
                                <td class="text-center"><a href="{{ url('participantes') }}">{{ $participantes }}</a></td>                                
                                <td class="text-center"><a href="{{ url('grupoInvestigaciones') }}">{{ $grupoInvestigaciones }}</a></td>                                
                                <td class="text-center"><a href="{{ url('establecimientos') }}">{{ $establecimientos }}</a></td>                                
                                <td class="text-center"><a href="{{ url('municipios') }}">{{ $municipios }}</a></td>                                
                               </tr> 
                          </tbody>
                      </table>


          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

