@extends('layouts.app')

@section('title', 'Planejamento')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-blue-900 mb-4">Célula de Planejamento</h1>
        <p class="text-gray-700 mb-6">Setor estratégico responsável por elaborar os planos de obras, orçamentos e cronogramas, alinhando as necessidades da cidade com os recursos disponíveis.</p>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-gray-50 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-800 mb-2">Atividades Principais</h2>
                <ul class="list-disc list-inside text-gray-600 space-y-2">
                    <li>Elaboração do plano anual de obras públicas.</li>
                    <li>Estudos de viabilidade técnica e financeira.</li>
                    <li>Criação de orçamentos e especificações para licitações.</li>
                    <li>Definição de prioridades de investimento em infraestrutura.</li>
                    <li>Acompanhamento do progresso físico e financeiro dos projetos.</li>
                </ul>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-800 mb-2">Contato</h2>
                <p class="text-gray-600"><span class="font-semibold">Responsável:</span> Ana Souza</p>
                <p class="text-gray-600"><span class="font-semibold">Email:</span> planejamento.obras@municipio.gov.br</p>
                <p class="text-gray-600"><span class="font-semibold">Telefone:</span> (00) 1234-5681</p>
            </div>
        </div>
    </div>
@endsection
