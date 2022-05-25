<?php

namespace App\Models\Cliente;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'estado',
        'email',

    ];

    public function getEstadoColorAttribute(){

        $colores = ['badge bg-success','badge bg-danger'];
        
        return $colores[$this->attributes['estado']-1];

    }

    public function getEstadoDescripcionAttribute(){
        
        $descripcion = ['HABILITADO','DESHABILITADO'];

        return $descripcion[$this->attributes['estado']-1];

    }
}
