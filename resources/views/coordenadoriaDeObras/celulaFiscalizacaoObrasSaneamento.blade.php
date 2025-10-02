@php
    $titulo = 'Célula de Fiscalização de Obras de Saneamento';
    $descricao = 'Responsável pela fiscalização da implantação e manutenção de redes de água, esgoto, drenagem e outras obras de infraestrutura sanitária.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])