@php
    $titulo = 'Célula de Fiscalização de Obras e Vias';
    $descricao = 'Responsável por garantir a conformidade e a qualidade das construções e manutenções em edificações e vias públicas do município.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])