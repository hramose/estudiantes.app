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
                          {!! Form::text('telefono', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'5-777777']) !!}
                          <small class="text-danger">{{ $errors->first('telefono') }}</small>
                      </div>

                      <div class="form-group">
                         {!! Form::label('correo', 'Correo:') !!}
                         {!! Form::text('correo', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'correo@ejemplo.com']) !!}
                         <small class="text-danger">{{ $errors->first('correo') }}</small>
                      </div>

                      <div class="form-group">
                        <div class="checkbox">
                            <label for="sexo" class="checkbox-inline">
                                {!! Form::radio('sexo', 'F',  null, [
                                    'class' => 'form-control',
                                    'id'    => 'sexo',
                                ]) !!} Femenino
                            </label>

                            <label for="rol" class="checkbox-inline">
                                {!! Form::radio('sexo', 'M',  null, [
                                    'class' => 'form-control',
                                    'id'    => 'sexo',
                                ]) !!} Masculino
                            </label>
                        </div>
                    </div>

                </div>  
                <div class="col-md-6">

                      <div class="form-group">
                          {!! Form::label('lugarNacimiento', 'Lugar de Nacimiento:') !!}
                          {!! Form::text('lugarNacimiento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('lugarNacimiento') }}</small>
                      </div>

                      <div class="form-group">
                          {!! Form::label('fechaNacimiento', 'Fecha de Nacimiento:', ['class' => 'control-label']) !!}
                            {!! Form::date('fechaNacimiento', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'DD/MM/AAAA']) !!}
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

                    <div class="panel panel-default" id="panel-gi" style="display:none;">
                      <div class="panel-body">

                          <div class="form-group">
                                {!! Form::label('grupoInvestigacion_id', 'Grupo de Investigaci&oacute;n:') !!}
                                <select name="grupoInvestigacion_id" id="grupoInvestigacion_id" class="form-control"></select>
                                <small class="text-danger">{{ $errors->first('grupoInvestigacion_id') }}</small>
                           </div>

                          <div class="form-group">
                                {!! Form::label('rol', 'Rol:') !!}
                                {!! Form::select('rol',withEmpty(config('options.roles'),'...'),null, ['class' => 'form-control', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('rol') }}</small>
                           </div>

                      </div>
                    </div>


                </div>

                <div class="col-md-12"> 

                      <div class="form-group">
                         {!! Form::label('observaciones', 'Observaciones :') !!}
                         {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'required' => 'required','rows'=>'3']) !!}
                         <small class="text-danger">{{ $errors->first('observaciones') }}</small>
                      </div>  
                </div>               
