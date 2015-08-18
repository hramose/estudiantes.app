<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigador extends Model {

	//
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'investigadores';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['grupoInvestigacion_id', 'persona_id','rol','grado'];

    public function participante(){

        return $this->belongsTo('App\Participante');

    }

    public function grupoInvestigacion(){

        return $this->belongsTo('App\GrupoInvestigacion','id');

    }


}
