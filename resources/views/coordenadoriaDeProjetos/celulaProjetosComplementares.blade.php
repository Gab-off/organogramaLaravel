@php
    $titulo = 'Célula de Projetos Complementares';
    $descricao = 'Responsável pelos projetos de engenharia que complementam o arquitetônico, como estruturas, instalações elétricas, hidráulicas e de drenagem.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])