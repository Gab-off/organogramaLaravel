<?php

namespace App\Http\Controllers\Coordenadorias\CoordenadoriaUsinaAsfalto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogisticaController extends Controller
{
    public function index()
    {
        return view('coordenadoriaUsinaAsfalto.celulaLogistica');
    }
}