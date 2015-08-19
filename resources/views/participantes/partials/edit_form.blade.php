                <div class="panel panel-default" id="panelGi" style="display:none;">
                      <div class="panel-body">

                          <div class="form-group">
                                {!! Form::label('grupoInvestigacion_id', 'Grupo de Investigaci&oacute;n:') !!}
                                {!! Form::select('investigador[grupoInvestigacion_id]',withEmpty($grupoInvestigaciones,'...'),null, ['
                                  class' => 'form-control','id'=> 'grupoInvestigacion_id','name'=>'grupoInvestigacion_id']) !!}
                                <small class="text-danger">{{ $errors->first('grupoInvestigacion_id') }}</small>
                           </div>

                          <div class="form-group">
                                {!! Form::label('rol', 'Rol:',['class'=>'rol']) !!}
                                {!! Form::select('investigador[rol]',withEmpty(config('options.roles'),'...'),null, ['class' => 'form-control rol','name'=>'rol']) !!}
                                <small class="text-danger">{{ $errors->first('rol') }}</small>
                           </div>

                          <div class="form-group">
                                {!! Form::label('grado', 'Grado',['class'=>'grado'])!!}
                                {!! Form::select('investigador[grado]',withEmpty(config('options.grados'),'...'), null,['class' => 'form-control grado']) !!}
                                <small class="text-danger">{{ $errors->first('grado') }}</small>
                          </div>

                      </div>
                    </div>


                </div>

                <div class="col-md-12"> 

                      <div class="form-group">
                         {!! Form::label('observaciones', 'Observaciones :') !!}
                         {!! Form::textarea('observaciones', null, ['class' => 'form-control','rows'=>'3']) !!}
                         <small class="text-danger">{{ $errors->first('observaciones') }}</small>
                      </div>  
                </div> 