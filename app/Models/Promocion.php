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
    ];

    protected $hidden =['id'];

    public function calzados()
    {
        return $this->belongsToMany('App\Models\Calzado');
    }
}
