<?php

namespace App\Http\Controllers\CoordenadoriaDeObras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManutencaoPredialController extends Controller
{
    public function index() {
        return view('coordenadoriaDeObras.celulaManutencaoPredial');
    }
}
