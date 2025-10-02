@php
    $titulo = 'Célula de Logística (Usina de Asfalto)';
    $descricao = 'Responsável pela gestão de insumos, equipamentos e transporte relacionados à produção e aplicação de asfalto, garantindo o abastecimento contínuo das frentes de serviço.';
@endphp

@include('partials.celula-base', ['titulo' => $titulo, 'descricao' => $descricao])