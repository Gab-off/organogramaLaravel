<?php

use Illuminate\Support\Facades\Route;

// Controllers do Nível Superior
use App\Http\Controllers\IndexController;

// Controllers da Coordenadoria de Obras (CORRIGIDO PARA O SEU PADRÃO ORIGINAL)
use App\Http\Controllers\Coordenadorias\Obras\FiscalizacaoEdificacaoViasController;
use App\Http\Controllers\Coordenadorias\Obras\ManutencaoPredialController;
use App\Http\Controllers\Coordenadorias\Obras\FiscalizacaoObrasSaneamentoController;
use App\Http\Controllers\Coordenadorias\Obras\PlanejamentoController;

// Controllers da Coordenadoria de Projetos (NOVO PADRÃO: CoordenadoriaDeProjetos)
use App\Http\Controllers\Coordenadorias\CoordenadoriaDeProjetos\OrganizacaoObrasController;
use App\Http\Controllers\Coordenadorias\CoordenadoriaDeProjetos\ProjetosArquitetonicosController;
use App\Http\Controllers\Coordenadorias\CoordenadoriaDeProjetos\ProjetosComplementaresController;

// Controllers da Coordenadoria da Usina de Asfalto (NOVO PADRÃO: CoordenadoriaUsinaAsfalto)
use App\Http\Controllers\Coordenadorias\CoordenadoriaUsinaAsfalto\LogisticaController as LogisticaUsinaController;

// Controllers da Coordenadoria de Manutenção (NOVO PADRÃO: CoordenadoriaDeManutencao)
use App\Http\Controllers\Coordenadorias\CoordenadoriaDeManutencao\GestaoOperacionalSede01Controller;
use App\Http\Controllers\Coordenadorias\CoordenadoriaDeManutencao\GestaoOperacionalSede02Controller;
use App\Http\Controllers\Coordenadorias\CoordenadoriaDeManutencao\GestaoOperacionalDistritoOeste03Controller;
use App\Http\Controllers\Coordenadorias\CoordenadoriaDeManutencao\GestaoOperacionalDistritoLeste04Controller;

// Controllers da Coordenadoria Jurídica (NOVO PADRÃO: CoordenadoriaJuridica)
use App\Http\Controllers\Coordenadorias\CoordenadoriaJuridica\GestaoDeContratosController;
use App\Http\Controllers\Coordenadorias\CoordenadoriaJuridica\AvaliacaoDeImoveisController;
use App\Http\Controllers\Coordenadorias\CoordenadoriaJuridica\AuditoriaInternaController;

// Controllers da Coordenadoria Administrativa Financeira (NOVO PADRÃO: CoordenadoriaAdministrativaFinanceira)
use App\Http\Controllers\Coordenadorias\CoordenadoriaAdministrativaFinanceira\GestaoDeConveniosController;
use App\Http\Controllers\Coordenadorias\CoordenadoriaAdministrativaFinanceira\AcompanhamentoSocialController;
use App\Http\Controllers\Coordenadorias\CoordenadoriaAdministrativaFinanceira\GestaoELogisticaController;
use App\Http\Controllers\Coordenadorias\CoordenadoriaAdministrativaFinanceira\TecnologiaDaInformacaoController;
use App\Http\Controllers\Coordenadorias\CoordenadoriaAdministrativaFinanceira\OrcamentoAdministrativoController;

// Rota inicial (Dashboard Geral)
Route::get('/', [IndexController::class, 'show'])->name('index');


/**
 * ROTAS DA COORDENADORIA DE OBRAS
 */
Route::prefix('obras')->group(function () {
    // Busca na pasta 'Obras'
    Route::get('/fiscalizacao-edificacao-vias', [FiscalizacaoEdificacaoViasController::class, 'index'])->name('cob.fiscalizacaoedificacao');
    Route::get('/manutencao-predial', [ManutencaoPredialController::class, 'index'])->name('cob.manutencaopredial');
    Route::get('/fiscalizacao-saneamento', [FiscalizacaoObrasSaneamentoController::class, 'index'])->name('cob.fiscalizacaosaneamento');
    Route::get('/planejamento', [PlanejamentoController::class, 'index'])->name('cob.planejamento');
});


/**
 * ROTAS DAS DEMAIS COORDENADORIAS (Usando o novo padrão de pasta)
 */
Route::prefix('projetos')->group(function () {
    Route::get('/organizacao-obras', [OrganizacaoObrasController::class, 'index'])->name('cproj.organizacao-obras');
    Route::get('/arquitetonicos', [ProjetosArquitetonicosController::class, 'index'])->name('cproj.arquitetonicos');
    Route::get('/complementares', [ProjetosComplementaresController::class, 'index'])->name('cproj.complementares');
});


Route::prefix('usina-asfalto')->group(function () {
    Route::get('/logistica', [LogisticaUsinaController::class, 'index'])->name('cusa.logistica');
});


Route::prefix('manutencao')->group(function () {
    Route::get('/sede-01', [GestaoOperacionalSede01Controller::class, 'index'])->name('cman.sede-01');
    Route::get('/sede-02', [GestaoOperacionalSede02Controller::class, 'index'])->name('cman.sede-02');
    Route::get('/distrito-oeste-03', [GestaoOperacionalDistritoOeste03Controller::class, 'index'])->name('cman.distrito-oeste-03');
    Route::get('/distrito-leste-04', [GestaoOperacionalDistritoLeste04Controller::class, 'index'])->name('cman.distrito-leste-04');
});


Route::prefix('juridica')->group(function () {
    Route::get('/contratos', [GestaoDeContratosController::class, 'index'])->name('cjur.contratos');
    Route::get('/avaliacao-imoveis', [AvaliacaoDeImoveisController::class, 'index'])->name('cjur.avaliacao-imoveis');
    Route::get('/auditoria-interna', [AuditoriaInternaController::class, 'index'])->name('cjur.auditoria-interna');
});


Route::prefix('adm-financeira')->group(function () {
    Route::get('/convenios', [GestaoDeConveniosController::class, 'index'])->name('caf.convenios');
    Route::get('/acompanhamento-social', [AcompanhamentoSocialController::class, 'index'])->name('caf.acompanhamento-social');
    Route::get('/gestao-logistica', [GestaoELogisticaController::class, 'index'])->name('caf.gestao-logistica');
    Route::get('/tecnologia-informacao', [TecnologiaDaInformacaoController::class, 'index'])->name('caf.ti');
    Route::get('/orcamento-administrativo', [OrcamentoAdministrativoController::class, 'index'])->name('caf.orcamento-adm');
});