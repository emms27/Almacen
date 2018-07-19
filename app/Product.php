<?php namespace almacen;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
  protected $table = 'products';
  protected $fillable = ['codigo','nombre','precio','stock','notas'];

	//
  public function movimientos()
    {
        return $this->hasMany('almacen\Movimiento');
    }

}
