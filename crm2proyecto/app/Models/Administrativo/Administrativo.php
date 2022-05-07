<?php

namespace App\Models\Administrativo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    use HasFactory;

    protected $table = 'administrativos';

    protected $fillable = [
        'nombre',
        'ci',
        'apellidos',
        'direccion',
        'correo',
        'telefono',
        'estado',
        'sexo',
        'fecha_nacimiento',
    ];


    public function getEstadoColorAttribute(){
        $colores = ['badge bg-success','badge bg-danger'];

        return $colores[$this->attributes['estado']-1];
    }

    public function getEstadoDescripcionAttribute(){

        $estados = ['HABILITADO','DESHABILITADO'];

        return $estados[$this->attributes['estado']-1];

    }
}
