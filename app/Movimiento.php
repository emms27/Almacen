<?php namespace almacen;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model {

  protected $table = 'almacenes_products';
  protected $fillable = ['almacenentrada_id','almacensalida_id','product_id','notas'];

  public function product()
    {
        return $this->belongsTo('almacen\Product');
    }
    public function aentrada()
    {
        return $this->belongsTo('almacen\Storehouse','almacenentrada_id');
    }

    public function asalida()
    {
        return $this->belongsTo('almacen\StoreDoshouse','almacensalida_id');
    }

}
