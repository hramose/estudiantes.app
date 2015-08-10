<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model {

	//
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['documento', 'tipoDocumento','nombre','apellido','sexo' , 'telefono','correo','lugarNacimiento','fechaNacimiento','observaciones'];


    public function participante(){

       return $this->hasMany('App\Participante');
    }

    public function getFullNameAttribute(){

        return "$this->nombre $this->apellido";

    }




}
