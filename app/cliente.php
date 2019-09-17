<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'clientes';
    protected $fillable = ['nombre','direccion','telefono'];
    protected $hidden = ['created_at','updated_at'];
}
