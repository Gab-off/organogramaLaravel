@extends('layouts.layout')
@section('title', $titulo ?? 'Dashboard da Célula')

@section('content')
    {{-- Bloco Principal da Célula --}}
    <div class="bg-white p-8 rounded-lg shadow-md">

        {{-- Título Principal (Cor da SEINFRA/Sobral) --}}
        <h1 class="text-3xl font-bold text-blue-800 mb-4">{{ $titulo ?? 'Célula' }}</h1>
        
        {{-- Descrição da Célula --}}
        <p class="text-gray-700 mb-6 border-b pb-4">{{ $descricao ?? 'Esta célula é responsável por...' }}</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            {{-- Card 1: Principais Atribuições (Inspirado no seu código) --}}
            <div class="bg-gray-50 p-6 rounded-lg shadow-inner">
                <h2 class="text-xl font-semibold text-blue-600 mb-4 border-b pb-2">Principais Atribuições</h2>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Atribuição padrão 1: Exemplo de CRUD de dados.</li>
                    <li>Atribuição padrão 2: Gerenciamento de cadastros.</li>
                    <li>Atribuição padrão 3: Relatórios e indicadores.</li>
                    {{-- ADICIONE AQUI AS ATRIBUIÇÕES ESPECÍFICAS DE CADA CÉLULA --}}
                </ul>
            </div>

            {{-- Card 2: Contato e Apoio (Pode ser padrão para todas) --}}
            <div class="bg-gray-50 p-6 rounded-lg shadow-inner">
                <h2 class="text-xl font-semibold text-blue-600 mb-4 border-b pb-2">Contatos</h2>
                <p class="text-gray-700 space-y-1">
                    <span class="font-semibold block">E-mail:</span>
                    <a href="mailto:contato@seinfra.sobral.ce.gov.br" class="text-blue-500 hover:text-blue-700">contato@seinfra.sobral.ce.gov.br</a>
                </p>
                <p class="text-gray-700 mt-3 space-y-1">
                    <span class="font-semibold block">Telefone:</span>
                    <span class="text-gray-900">(88) 1234-5678</span>
                </p>
            </div>
            
            {{-- Card 3: Dashboard/Indicadores (Pode ser vazio para customização) --}}
            <div class="bg-gray-50 p-6 rounded-lg shadow-inner">
                <h2 class="text-xl font-semibold text-blue-600 mb-4 border-b pb-2">Indicadores Rápidos</h2>
                <p class="text-gray-700">Adicione aqui o conteúdo dinâmico (contadores, gráficos, status).</p>
            </div>

        </div>
    </div>
@endsection