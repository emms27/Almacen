<?php namespace almacen;

use Illuminate\Database\Eloquent\Model;

class Storehouse extends Model {
    protected $table = 'almacenes';
    protected $fillable = ['nombre'];
  	//

    public function movimientos()
      {
          return $this->hasMany('almacen\Movimiento','almacenentrada_id');
      }
}
