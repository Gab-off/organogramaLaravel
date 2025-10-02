@extends('layouts.app')

@section('title', 'Manutenção Predial')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-blue-900 mb-4">Célula de Manutenção Predial</h1>
        <p class="text-gray-700 mb-6">Focada na conservação e reparo dos prédios públicos, garantindo a segurança, funcionalidade e o bem-estar dos servidores e cidadãos que os utilizam.</p>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-gray-50 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-800 mb-2">Serviços Executados</h2>
                <ul class="list-disc list-inside text-gray-600 space-y-2">
                    <li>Manutenção elétrica e hidráulica.</li>
                    <li>Reparos em alvenaria, pintura e revestimentos.</li>
                    <li>Gestão de contratos de limpeza e segurança.</li>
                    <li>Manutenção de sistemas de ar-condicionado.</li>
                    <li>Pequenas reformas e adaptações de layout.</li>
                </ul>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-800 mb-2">Contato</h2>
                <p class="text-gray-600"><span class="font-semibold">Responsável:</span> Maria Oliveira</p>
                <p class="text-gray-600"><span class="font-semibold">Email:</span> manutencao.predial@municipio.gov.br</p>
                <p class="text-gray-600"><span class="font-semibold">Telefone:</span> (00) 1234-5679</p>
            </div>
        </div>
    </div>
@endsection
