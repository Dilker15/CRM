<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente\Cliente;
use App\Models\Calzado;
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
  public function cliente(){
    return $this->belongsTo('App\Models\Cliente\Cliente','id_cliente','id');
}
}
