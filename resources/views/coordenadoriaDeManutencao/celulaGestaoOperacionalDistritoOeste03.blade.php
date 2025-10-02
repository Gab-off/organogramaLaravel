@php
    $titulo = 'Célula de Gestão Operacional - Distrito Oeste 03';
    $descricao = 'Responsável por coordenar as equipes de manutenção e zeladoria na área do Distrito Oeste, focando nas demandas e especificidades geográficas dessa região.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])