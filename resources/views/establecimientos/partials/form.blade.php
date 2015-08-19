                    <div class="form-group">
                        {!! Form::label('nombre', 'Establecimiento:') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger"> {{ $errors->first('nombre') }}</small>
                    </div>  

                     <div class="form-group">
                        {!! Form::label('dane', 'Dane:') !!}
                        {!! Form::text('dane', null, ['class' => 'form-control']) !!}
                        <small class="text-danger"> {{ $errors->first('dane') }}</small>
                    </div> 

                    <div class="form-group">
                      {!! Form::label('municipio_id', 'Municipio:') !!}
                      {!! Form::select('municipio_id', $municipios ,null, ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('municipio_id') }}</small>
                    </div> 