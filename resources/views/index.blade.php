@extends('layouts.layout')

@section('title', 'Organograma SEINFRA - Página Inicial')

@section('content')
    {{-- Seção de Boas-vindas --}}
    <div class="bg-white p-8 rounded-lg shadow-md text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-2">Organograma Interativo</h1>
        <p class="text-lg text-gray-600">Navegue pela estrutura organizacional e descubra as funções de cada setor.</p>
    </div>

    {{-- Seção com os Cards de Navegação --}}
    <div>
        <h2 class="text-2xl font-semibold text-blue-950 mb-6 text-center">Principais Coordenadorias</h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Card 1: Coordenadoria de Obras --}}
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <h3 class="text-xl font-bold text-blue-800 mb-3">Coordenadoria de Obras</h3>
                <p class="text-gray-600 flex-grow mb-6">Responsável pela fiscalização, manutenção e planejamento de obras públicas e edificações municipais.</p>
                {{-- Link: Leva para a primeira Célula: Fiscalização Edificação/Vias (cob.fiscalizacaoedificacao) --}}
                <a href="{{ route('cob.fiscalizacaoedificacao') }}" class="mt-auto bg-blue-900 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-300 text-center">
                    Explorar Seção
                </a>
            </div>

            {{-- Card 2: Coordenadoria de Projetos --}}
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <h3 class="text-xl font-bold text-blue-800 mb-3">Coordenadoria de Projetos</h3>
                <p class="text-gray-600 flex-grow mb-6">Elaboração e desenvolvimento de projetos de engenharia e arquitetura para o município.</p>
                {{-- Link: Leva para a primeira Célula: Organização de Obras (cproj.organizacao-obras) --}}
                <a href="{{ route('cproj.organizacao-obras') }}" class="mt-auto bg-blue-900 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-300 text-center">
                    Explorar Seção
                </a>
            </div>

            {{-- Card 3: Coordenadoria da Usina de Asfalto --}}
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <h3 class="text-xl font-bold text-blue-800 mb-3">Coordenadoria da Usina de Asfalto</h3>
                <p class="text-gray-600 flex-grow mb-6">Produção e aplicação de massa asfáltica para a pavimentação e recuperação de vias urbanas.</p>
                {{-- Link: Leva para a única Célula: Logística (cusa.logistica) --}}
                <a href="{{ route('cusa.logistica') }}" class="mt-auto bg-blue-900 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-300 text-center">
                    Explorar Seção
                </a>
            </div>

            {{-- Card 4: Coordenadoria de Manutenção --}}
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <h3 class="text-xl font-bold text-blue-800 mb-3">Coordenadoria de Manutenção</h3>
                <p class="text-gray-600 flex-grow mb-6">Gestão operacional de manutenção e zeladoria das quatro regiões da cidade.</p>
                {{-- Link: Leva para a primeira Célula: Gestão Operacional - Sede 01 (cman.sede-01) --}}
                <a href="{{ route('cman.sede-01') }}" class="mt-auto bg-blue-900 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-300 text-center">
                    Explorar Seção
                </a>
            </div>
            
            {{-- Card 5: Coordenadoria Jurídica --}}
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <h3 class="text-xl font-bold text-blue-800 mb-3">Coordenadoria Jurídica</h3>
                <p class="text-gray-600 flex-grow mb-6">Consultoria jurídica, gestão de contratos, avaliação de imóveis e auditoria interna.</p>
                {{-- Link: Leva para a primeira Célula: Gestão de Contratos (cjur.contratos) --}}
                <a href="{{ route('cjur.contratos') }}" class="mt-auto bg-blue-900 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-300 text-center">
                    Explorar Seção
                </a>
            </div>
            
            {{-- Card 6: Coordenadoria Administrativa Financeira --}}
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <h3 class="text-xl font-bold text-blue-800 mb-3">Coordenadoria Adm. Financeira</h3>
                <p class="text-gray-600 flex-grow mb-6">Gestão de convênios, TI, logística, orçamento e acompanhamento social.</p>
                {{-- Link: Leva para a primeira Célula: Gestão de Convênios (caf.convenios) --}}
                <a href="{{ route('caf.convenios') }}" class="mt-auto bg-blue-900 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-300 text-center">
                    Explorar Seção
                </a>
            </div>

        </div>
    </div>
@endsection