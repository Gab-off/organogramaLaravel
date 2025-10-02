@php
    $titulo = 'Célula de Manutenção Predial';
    $descricao = 'Responsável pela manutenção preventiva e corretiva de todos os prédios e espaços públicos municipais, garantindo a funcionalidade e segurança.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])