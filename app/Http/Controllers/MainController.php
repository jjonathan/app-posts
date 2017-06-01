<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    
	public function index(){

		$hora = date('h:d:i');
		$tempo = "TEMPO";
		$posts = "POSTS";
		$appNome = "App-Posts";

		return view('main', compact('hora', 'tempo', 'posts', 'appNome'));

	}

}
