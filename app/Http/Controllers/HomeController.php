<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function homepage(){
        $drago = Http::get('https://dragonball-api.com/api/characters')->json ('items');
        return view('welcome', ['drago' => $drago]);
    }

    public function show($id){
        $dragon = Http::get('https://dragonball-api.com/api/characters/' . $id)->json ();
        return view('show', ['drago' => $dragon]);
    }
}
