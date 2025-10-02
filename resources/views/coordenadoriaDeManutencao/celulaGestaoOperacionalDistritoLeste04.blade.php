@php
    $titulo = 'Célula de Gestão Operacional - Distrito Leste 04';
    $descricao = 'Responsável por coordenar as equipes de manutenção e zeladoria na área do Distrito Leste, focando nas demandas e especificidades geográficas dessa região.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])