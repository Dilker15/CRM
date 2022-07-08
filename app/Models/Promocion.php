<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $table = 'promocion';

    protected $fillable = [
        'id',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'descuento',
        'calzado_id',  
        'imagen', 
    ];

    protected $hidden =['id'];

    public function calzado()
    {
        return $this->hasOne('App\Models\Calzado','calzado_id','id');
    }
}
