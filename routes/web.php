<?php

use App\Http\Controllers\CoordenadoriaDeObras\FiscObrasEdificacaoController;
use App\Http\Controllers\CoordenadoriaDeObras\ManutencaoPredialController;
use App\Http\Controllers\CoordenadoriaDeObras\FiscalizacaoObrasSaneamentoController;
use App\Http\Controllers\CoordenadoriaDeObras\PlanejamentoController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'show'])->name('index');

Route::prefix('/cdo')->group(function (){
   Route::get('/fiscalizacaoObrasEdificacao', [FiscObrasEdificacaoController::class, 'index'])->name('cdo.fiscalizacaoObrasEdificacao');
   Route::get('/manutencaoPredial', [ManutencaoPredialController::class, 'index'])->name('cdo.manutencaoPredial');;
   Route::get('/fiscalizacaoObrasSaneamento', [FiscalizacaoObrasSaneamentoController::class, 'index'])->name('cdo.fiscalizacaoObrasSaneamento');;;
   Route::get('/planejamento', [PlanejamentoController::class, 'index'])->name('cdo.planejamento');;
});
