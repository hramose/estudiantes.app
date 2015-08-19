                <div class="col-md-12">                
                    <div class="form-group col-md-4">
                        {!! Form::label('name', 'Nombre:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>

                    <div class="form-group col-md-3">
                        {!! Form::label('email', 'Correo:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'correo@algo.com']) !!}
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>

                    <div class="form-group col-md-3">
                        {!! Form::label('password', 'Contraseña:') !!}
                        {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                    </div>

                    <div class="form-group col-md-2">
                      {!! Form::label('type', 'Tipo de usuario') !!}
                      {!! Form::select('type',['2'=>'Usuario','1'=>'Admin'], '2', ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('type') }}</small>
                    </div>

                </div>

                <div class="col-md-5">

                  <div class="form-group">
                      {!! Form::label('ruta', 'Ruta:') !!}
                      {!! Form::select('ruta', withEmpty(config('options.rutas'),'...'), null, ['class' => 'form-control', 'required' => 'required']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('municipio', 'Municipio:') !!}
                      {!! Form::select('municipio', [''=>''], null, ['class' => 'form-control', 'required' => 'required']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('establecimiento', 'Establecimientos: ') !!}
                      <p class="small text-info">Mantenga pulsado ctrl para seleccionar mas de uno</p>
                      {!! Form::select('establecimiento', [''=>''], null, ['class' => 'form-control', 'required' => 'required','multiple']) !!}
                  </div>
                  <button type="button" id="agregar" class="btn btn-default btn-xs pull-right">Agregar >></button>
                
                </div>

                <div class="col-md-7">
                  
                  <div class="form-group">
                      {!! Form::label('establecimiento_id', 'Establecimientos seleccionados:') !!}
                      <select  class="form-control" name="establecimiento_id" id="establecimiento_id" required multiple></select>
                      <small class="text-danger">{{ $errors->first('establecimiento_id') }}</small>
                  </div>

                </div>