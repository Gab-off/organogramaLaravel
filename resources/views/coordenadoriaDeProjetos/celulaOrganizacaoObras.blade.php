@php
    $titulo = 'Célula de Organização de Obras';
    $descricao = 'Responsável por estruturar o cronograma e o fluxo de trabalho de todas as obras, garantindo a alocação correta de recursos e a eficiência na execução.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])