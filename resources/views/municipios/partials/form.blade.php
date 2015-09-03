                    <div class="form-group">
                        {!! Form::label('nombre', 'Municipio:') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger"> {{ $errors->first('nombre') }}</small>
                    </div>  
                    <div class="form-group">
                        {!! Form::label('ruta_id', 'Ruta:') !!}
                        {!! Form::select('ruta_id', withEmpty(config('options.rutas'),'...'), null, ['class' => 'form-control']) !!}
                    </div>                                 
