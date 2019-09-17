<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'peliculas';
    protected $fillable = ['nombre','descripcion','fecha', 'precio', 'id_autor'];
    protected $hidden = ['created_at','updated_at'];

    public function autor(){
    	return $this->belongsTo('App\autor', 'id');
    }
}
