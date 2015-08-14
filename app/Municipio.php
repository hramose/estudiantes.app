<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model {

	//
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'municipios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'ruta'];



    public function establecimiento(){
       return $this->hasMany('App\Establecimiento');
    }

}
