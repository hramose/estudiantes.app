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
    protected $fillable = ['persona_id','establecimiento_id','rol'];

    public function persona(){
       return $this->belongsTo('App\Persona');
    }

    public function establecimiento(){
       return $this->belongsTo('App\Establecimiento');
    }

    public function investigador(){

        return $this->hasOne('App\Investigador');
    }


}
