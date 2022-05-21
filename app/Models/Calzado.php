<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calzado extends Model
{
  //  use HasFactory;

  
 protected $table ="calzado";
 public $timestamps = false;
  protected $fillable =['marca','precio','stock','estado','detalle','imagen'];
 
  protected $hidden =['id'];





}
