<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model {

	//
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'establecimientos';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'dane','municipio_id'];



    public function municipio(){
      return $this->belongsTo('App\Municipio');
    }

    public function grupoInvestigacion(){
       return $this->hasMany('App\GrupoInvestigacion');
    }

    public function asesor(){
      return $this->hasMany('App\Asesor');
    }


    public function participante(){
       return $this->hasMany('App\Participante','establecimiento_id');
    }

}