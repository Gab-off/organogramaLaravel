@php
    $titulo = 'Célula de Orçamento Administrativo';
    $descricao = 'Responsável por elaborar, executar e acompanhar o orçamento interno da Secretaria, controlando despesas e receitas administrativas.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])