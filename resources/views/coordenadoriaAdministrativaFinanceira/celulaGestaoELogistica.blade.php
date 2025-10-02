@php
    $titulo = 'Célula de Gestão e Logística';
    $descricao = 'Responsável pela gestão de materiais de escritório, suprimentos gerais, patrimônio da Secretaria e pela logística de veículos e motoristas.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])