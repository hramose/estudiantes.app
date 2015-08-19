                      <div class="form-group">
                          {!! Form::label('documento', 'Nº de documento:') !!}
                          {!! Form::text('documento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('documento') }}</small>
                      </div>

                      <div class="form-group">
                          {!! Form::label('tipoDocumento', 'Tipo de documento:') !!}
                          {!! Form::select('tipoDocumento',withEmpty(config('options.tiposdoc'),'...'), null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('tipoDocumento') }}</small>
                      </div>

                      <div class="form-group">
                          {!! Form::label('nombre', 'Nombre:') !!}
                          {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('nombre') }}</small>
                      </div>

                      <div class="form-group">
                          {!! Form::label('apellido', 'Apellido:') !!}
                          {!! Form::text('apellido', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('apellido') }}</small>
                      </div>
                
                      <div class="form-group">
                          {!! Form::label('telefono', 'Telefono:') !!}
                          {!! Form::text('telefono', null, ['class' => 'form-control','placeholder'=>'5-777777']) !!}
                          <small class="text-danger">{{ $errors->first('telefono') }}</small>
                      </div>

                      <div class="form-group">
                         {!! Form::label('correo', 'Correo:') !!}
                         {!! Form::text('correo', null, ['class' => 'form-control','placeholder'=>'correo@ejemplo.com']) !!}
                         <small class="text-danger">{{ $errors->first('correo') }}</small>
                      </div>

                      <div class="form-group">
                        <div class="checkbox">
                            <label for="sexo" class="checkbox-inline">
                                {!! Form::radio('sexo', 'F',  null, [
                                    'class'   => 'form-control',
                                    'id'      => 'sexo',
                                    'required'=> 'required'
                                ]) !!} Femenino
                            </label>

                            <label for="rol" class="checkbox-inline">
                                {!! Form::radio('sexo', 'M',  null, [
                                    'class'   => 'form-control',
                                    'id'      => 'sexo',
                                    'required'=> 'required'
                                ]) !!} Masculino
                            </label>
                        </div>
                    </div>

                </div>  
                <div class="col-md-6">

                      <div class="form-group">
                          {!! Form::label('lugarNacimiento', 'Lugar de Nacimiento:') !!}
                          {!! Form::text('lugarNacimiento', null, ['class' => 'form-control']) !!}
                          <small class="text-danger">{{ $errors->first('lugarNacimiento') }}</small>
                      </div>

                      <div class="form-group">
                          {!! Form::label('fechaNacimiento', 'Fecha de Nacimiento:', ['class' => 'control-label']) !!}
                            {!! Form::date('fechaNacimiento', null, ['class' => 'form-control','placeholder'=>'DD/MM/AAAA']) !!}
                            <small class="text-danger">{{ $errors->first('fechaNacimiento') }}</small>
                      </div>


                      <div class="form-group">
                          {!! Form::label('establecimiento_id', 'Establecimiento:') !!}
                          {!! Form::select('establecimiento_id', withEmpty($establecimientos,'...') , null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('establecimiento_id') }}</small>
                      </div>

                    <div class="form-group">
                          {!! Form::label('tipo', 'Tipo usuario:') !!}
                          {!! Form::select('tipo', withEmpty(config('options.tipos'),'...'),null, ['class' => 'form-control', 'required' => 'required',]) !!}
                          <small class="text-danger">{{ $errors->first('tipo') }}</small>
                     </div>



              
