<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
   // use HasFactory;
    
 protected $table ="ventas";
 //public $timestamps = false;
  protected $fillable =['fechahora','monto_total','id_cliente'];
 
  protected $hidden =['id'];


  public function calzado()
  {
    return $this->belongsToMany('App\Models\Calzado','calzado_venta','id_calzado','venta_id');

  }
}
