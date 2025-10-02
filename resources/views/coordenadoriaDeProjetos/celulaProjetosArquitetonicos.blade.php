@php
    $titulo = 'Célula de Projetos Arquitetônicos';
    $descricao = 'Responsável pelo desenvolvimento e aprovação dos projetos arquitetônicos de todas as novas edificações e reformas municipais.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])