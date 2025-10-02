@php
    $titulo = 'Célula de Avaliação de Imóveis';
    $descricao = 'Responsável pela avaliação técnica e legal de imóveis para fins de desapropriação, aquisição ou permuta, assegurando a justa indenização.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])