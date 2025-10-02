@php
    $titulo = 'Célula de Planejamento';
    $descricao = 'Responsável pelo planejamento de curto, médio e longo prazo de todas as atividades e projetos da Coordenadoria, incluindo orçamentos e cronogramas.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])