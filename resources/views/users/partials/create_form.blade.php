                <div class="col-md-12">
                    <div class="form-group col-md-6">
                      {!! Form::label('establecimiento_id', 'Establecimientos:') !!}<br>
                      <small>Seleccione los establecimientos a asignar</small>
                      <select  class="form-control" name="establecimiento_id[]" id="establecimiento_id" required multiple></select>
                      <small class="text-danger">{{ $errors->first('establecimiento_id') }}</small>
                    </div>
                </div>