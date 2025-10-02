@php
    $titulo = 'Célula de Tecnologia da Informação';
    $descricao = 'Responsável por fornecer suporte técnico, gerenciar a infraestrutura de TI e desenvolver sistemas internos para otimizar os processos da Secretaria.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])