<?php

namespace App\Http\Controllers;
use App\autor;
use Illuminate\Http\Request;

class autor_controller extends Controller
{
    public function index(){
    	$autor = autor::find(15);
    	return $autor;
    }
}
