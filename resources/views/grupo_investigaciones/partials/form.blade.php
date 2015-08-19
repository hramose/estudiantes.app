                    <div class="form-group">
                        {!! Form::label('nombre', 'Grupo de Investigaci&oacute;n:') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger"> {{ $errors->first('nombre') }}</small>
                    </div>  

                     <div class="form-group">
                        {!! Form::label('codigoCV', 'C&oacute;digo de Comunidad Virtual:') !!}
                        {!! Form::text('dane', null, ['class' => 'form-control']) !!}
                        <small class="text-danger"> {{ $errors->first('dane') }}</small>
                    </div>  

                    <div class="form-group">
                      {!! Form::label('establecimiento_id', 'Establecimiento:') !!}
                      {!! Form::select('establecimiento_id',$establecimientos,null, ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('establecimiento_id') }}</small>
                    </div>                                  
