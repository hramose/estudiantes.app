<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model {

	//
    protected $table = 'participantes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['persona_id','convocatoria_id'];

    public function persona(){
       return $this->belongsTo('App\Persona');
    }

    public function convocatoria(){
       return $this->belongsTo('App\Convocatoria');
    }


}
