<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model {

	//
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'asesores';

    protected $fillable = ['establecimiento_id', 'user_id'];

    public function establecimiento(){
       return $this->belongsTo('App\Establecimiento');
    }

    public function user(){
       return $this->belongsTo('App\User');
    }

}
