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
    protected $fillable = ['grupoInvestigacion_id', 'participante_id'];

    public function participante(){

        return $this->belongsTo('App\Participante');

    }


}
