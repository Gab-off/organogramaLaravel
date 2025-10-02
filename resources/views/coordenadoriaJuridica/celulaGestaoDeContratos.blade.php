@php
    $titulo = 'Célula de Gestão de Contratos';
    $descricao = 'Responsável por fiscalizar, monitorar e gerenciar a execução de todos os contratos firmados pela Secretaria com terceiros, garantindo o cumprimento legal e técnico.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])