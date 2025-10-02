@extends('layouts.app')

@section('title', 'Saneamento')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-blue-900 mb-4">Célula de Fiscalização de Obras de Saneamento</h1>
        <p class="text-gray-700 mb-6">Supervisiona todas as obras relacionadas aos sistemas de água e esgoto, assegurando a correta implementação e o impacto positivo na saúde pública e meio ambiente.</p>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-gray-50 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-800 mb-2">Focos de Atuação</h2>
                <ul class="list-disc list-inside text-gray-600 space-y-2">
                    <li>Acompanhamento de obras de expansão da rede de esgoto.</li>
                    <li>Fiscalização de estações de tratamento de água (ETA).</li>
                    <li>Monitoramento da qualidade da água distribuída.</li>
                    <li>Verificação de ligações clandestinas.</li>
                    <li>Análise de projetos de drenagem urbana.</li>
                </ul>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-800 mb-2">Contato</h2>
                <p class="text-gray-600"><span class="font-semibold">Responsável:</span> Carlos Pereira</p>
                <p class="text-gray-600"><span class="font-semibold">Email:</span> saneamento.obras@municipio.gov.br</p>
                <p class="text-gray-600"><span class="font-semibold">Telefone:</span> (00) 1234-5680</p>
            </div>
        </div>
    </div>
@endsection
