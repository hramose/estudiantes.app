                <div class="col-md-6">                
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Correo:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'correo@algo.com']) !!}
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Contraseña:') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                    </div>

                    <div class="form-group">
                      {!! Form::label('type', 'Tipo de usuario') !!}
                      {!! Form::select('type',['2'=>'Usuario','1'=>'Admin'], '2', ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('type') }}</small>
                    </div>

                </div>

                <div class="col-md-6">
                <div class="panel panel-default">
                <div class="panel-body">

                  <div class="form-group col-md-5">
                      {!! Form::label('ruta_id', 'Ruta:') !!}
                      {!! Form::select('ruta_id', withEmpty(config('options.rutas'),'...'), null, ['class' => 'form-control']) !!}
                  </div>

                  <div class="form-group col-md-7">
                      {!! Form::label('municipio_id', 'Municipio:') !!}
                      {!! Form::select('municipio_id', [''=>''], null, ['class' => 'form-control']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('establecimiento', 'Establecimientos: ') !!}
                      {!! Form::select('establecimiento', [''=>''], null, ['class' => 'form-control','multiple']) !!}
                      <small>Mantenga pulsado ctrl para seleccionar mas de uno</small>
                  </div>
                  <button type="button" id="agregar" class="btn btn-default btn-xs pull-left"><< Agregar</button>
               
                </div>
                </div>
                </div>
