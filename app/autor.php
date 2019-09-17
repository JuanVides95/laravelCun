<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
	protected $primaryKey = 'id';
    protected $table = 'autors';
    protected $fillable = ['nombre','telefono'];
    protected $hidden = ['created_at','updated_at'];

    protected $casts=[
    	'telefono'=> 'array'
    ];

    public function pelicula(){
    	return $this->hasMany('App\pelicula', 'id_autor');
    }

    public function getFullNameAttribute(){
    	return "{$this->id}-{$this->nombre}";
    }

    protected $appends=[
        'full_name'
    ];

    public function setNameAttribute($value){
    	$this->attribute['nombre']=strtolower($value);
    }
}
