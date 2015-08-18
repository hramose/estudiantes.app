<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model {

	//
    protected $table = 'asistentes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['participante_id','convocatoria_id'];

    public function participante(){
       return $this->belongsTo('App\Participante');
    }

    public function convocatoria(){
       return $this->belongsTo('App\Convocatoria');
    }


}
