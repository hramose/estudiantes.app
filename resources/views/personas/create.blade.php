@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Registrar persona</div>
                <div class="panel-body ">

                  <div class="col-md-6">

                  
                  {!! Form::open(['method' => 'POST', 'route' => 'personas.store', 'class' => 'form-horizontal col-md-11']) !!}

                  @include('personas.partials.form')

                  <div class="col-md-12">              

                      <div class="btn-group pull-right">
                          <a class="btn btn-warning" href="{!! url('personas') !!}" role="button">Cancelar</a>
                          {!! Form::submit("Registrar", ['class' => 'btn btn-success']) !!}
                      </div>
                  w
                  {!! Form::close() !!}

                </div> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>

$(document).ready(function(){

    $("#establecimiento_id" ).change(function(e) {

      //console.log(e);
      var ee_id = e.target.value;

        //ajax
        $.get('/ajax-gi?ee_id=' + ee_id,function (data) { 
            // succes data
            $("#grupoInvestigacion_id").empty();
            $.each(data,function(i, gi_Obj){
                $("#grupoInvestigacion_id").append('"<option value ="' + gi_Obj.id +'">' + gi_Obj.nombre + '</option>');
            });
        },
        'json');  

    });
  
});

</script>
@endsection

