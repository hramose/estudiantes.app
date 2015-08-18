<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoInvestigacion extends Model {

	//
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'grupo_investigaciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'codigoCV','establecimiento_id'];

    public function establecimiento(){
      return $this->belongsTo('App\Establecimiento');
    }

    public function investigador(){

        return $this->hasMany('App\Investigador');
    }

}
