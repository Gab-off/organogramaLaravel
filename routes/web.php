<?php

use App\Http\Controllers\CoordenadoriaDeObras\CelulaFiscObrasEdificacaoController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'show'])->name('index');

Route::prefix('/cdo')->group(function (){
   Route::get('fiscalizacaoObrasEdificacao', [CelulaFiscObrasEdificacaoController::class, 'index'])->name('cdo.fiscalizacaoObrasEdificacao');
});
