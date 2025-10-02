@php
    $titulo = 'Célula de Gestão Operacional - Sede 02';
    $descricao = 'Responsável por coordenar as equipes de manutenção e zeladoria na segunda região da cidade, planejando intervenções e respondendo a solicitações operacionais.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])