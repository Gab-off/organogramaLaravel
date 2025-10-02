<?php

namespace App\Http\Controllers\Coordenadorias\CoordenadoriaAdministrativaFinanceira;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestaoELogisticaController extends Controller
{
    public function index()
    {
        return view('coordenadoriaAdministrativaFinanceira.celulaGestaoELogistica');
    }
}