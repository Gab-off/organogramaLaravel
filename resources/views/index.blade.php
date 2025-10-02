@extends('layouts.app')

@section('title', 'Página Inicial')

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

            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <h3 class="text-xl font-bold text-blue-800 mb-3">Coordenadoria de Obras</h3>
                <p class="text-gray-600 flex-grow mb-6">Responsável pela fiscalização, manutenção e planejamento de obras públicas e edificações municipais.</p>
                {{-- Este link pode ser o primeiro item do dropdown para facilitar --}}
                <a href="{{ route('cdo.fiscalizacaoObrasEdificacao') }}" class="mt-auto bg-blue-900 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-300 text-center">
                    Explorar Seção
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <h3 class="text-xl font-bold text-blue-800 mb-3">Coordenadoria de Projetos</h3>
                <p class="text-gray-600 flex-grow mb-6">Elaboração e desenvolvimento de projetos de engenharia e arquitetura para o município.</p>
                <a href="#" class="mt-auto bg-gray-400 text-white font-semibold py-2 px-4 rounded-lg cursor-not-allowed text-center">
                    (Em Breve)
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <h3 class="text-xl font-bold text-blue-800 mb-3">Coordenadoria da Usina de Asfalto</h3>
                <p class="text-gray-600 flex-grow mb-6">Produção e aplicação de massa asfáltica para a pavimentação e recuperação de vias urbanas.</p>
                <a href="#" class="mt-auto bg-gray-400 text-white font-semibold py-2 px-4 rounded-lg cursor-not-allowed text-center">
                    (Em Breve)
                </a>
            </div>

            {{-- Você pode adicionar mais cards aqui para as outras seções do menu --}}

        </div>
    </div>
@endsection
