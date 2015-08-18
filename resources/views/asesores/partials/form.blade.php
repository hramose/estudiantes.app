                    <div class="form-group">
                      {!! Form::label('user_id', 'Usuario:') !!}
                      {!! Form::select('user_id',withEmpty($users,'...') ,null, ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('user_id') }}</small>
                    </div>

                    <div class="form-group">
                      {!! Form::label('establecimiento_id', 'Establecimientos:') !!}
                      {!! Form::select('establecimiento_id',withEmpty($establecimientos,'...'),null, ['class' => 'form-control', 'required' => 'required','multiple']) !!}
                      <small class="text-danger">{{ $errors->first('establecimiento_id') }}</small>
                    </div>
