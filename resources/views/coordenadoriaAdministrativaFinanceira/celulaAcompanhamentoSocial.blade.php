@php
    $titulo = 'Célula de Acompanhamento Social';
    $descricao = 'Responsável por gerenciar os impactos sociais de obras e projetos, realizando a comunicação, o cadastro e o acompanhamento das famílias afetadas.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])