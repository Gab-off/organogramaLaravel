@php
    $titulo = 'Célula de Gestão Operacional - Sede 01';
    $descricao = 'Responsável por coordenar as equipes de manutenção e zeladoria na primeira região da cidade, planejando intervenções e respondendo a solicitações operacionais.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])