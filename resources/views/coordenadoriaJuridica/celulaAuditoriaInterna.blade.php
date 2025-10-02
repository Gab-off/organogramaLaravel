@php
    $titulo = 'Célula de Auditoria Interna';
    $descricao = 'Responsável por realizar auditorias nos processos internos da Secretaria, verificando a conformidade com as normas e a eficiência na aplicação dos recursos públicos.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])