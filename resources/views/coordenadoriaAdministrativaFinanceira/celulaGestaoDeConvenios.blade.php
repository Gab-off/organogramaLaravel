@php
    $titulo = 'Célula de Gestão de Convênios';
    $descricao = 'Responsável por gerenciar e acompanhar a execução dos convênios firmados com entidades externas e outras esferas de governo, garantindo a prestação de contas.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])