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

                    <div class="form-group col-md-5">
                        {!! Form::label('ruta', 'Ruta:') !!}
                        {!! Form::select('ruta', withEmpty(config('options.rutas'),'...'), null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group col-md-7 col-offset-1">
                        {!! Form::label('municipio', 'Municipio:') !!}
                        {!! Form::select('municipio', [''=>''], null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('establecimiento_id', 'Establecimiento:') !!}<br>
                      <select  class="form-control" name="establecimiento_id" id="establecimiento"></select>
                      <small class="text-danger">{{ $errors->first('establecimiento_id') }}</small>
                    </div>                                  
