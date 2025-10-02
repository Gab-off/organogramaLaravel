@extends('layouts.app')

@section('title', 'Fiscalização de Obras e Vias')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-blue-900 mb-4">Célula de Fiscalização de Obras e Edificação/Vias</h1>
        <p class="text-gray-700 mb-6">Esta célula é responsável por garantir a conformidade e a qualidade das construções e manutenções em edificações e vias públicas do município.</p>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-gray-50 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-800 mb-2">Principais Atribuições</h2>
                <ul class="list-disc list-inside text-gray-600 space-y-2">
                    <li>Analisar e aprovar projetos de construção.</li>
                    <li>Realizar vistorias periódicas em obras em andamento.</li>
                    <li>Fiscalizar a manutenção de vias e estradas.</li>
                    <li>Emitir laudos técnicos e notificações.</li>
                    <li>Assegurar o cumprimento das normas de acessibilidade.</li>
                </ul>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-800 mb-2">Contato</h2>
                <p class="text-gray-600"><span class="font-semibold">Responsável:</span> João da Silva</p>
                <p class="text-gray-600"><span class="font-semibold">Email:</span> fiscal.obras@municipio.gov.br</p>
                <p class="text-gray-600"><span class="font-semibold">Telefone:</span> (00) 1234-5678</p>
            </div>
        </div>
    </div>
@endsection
