<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEINFRA - Prefeitura de Sobral</title>

    {{-- Aqui você pode incluir seu CSS (Tailwind, Bootstrap, ou customizado) --}}
    {{-- Exemplo usando Vite: @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <style>
        /* Estilos básicos para simular o layout do organograma */
        body { font-family: sans-serif; margin: 0; background-color: #f4f7f9; }
        #header { background-color: #003366; color: white; padding: 10px 20px; display: flex; justify-content: space-between; align-items: center; }
        #header img { height: 60px; } /* Ajuste conforme a logo */
        #container { display: flex; min-height: 100vh; }
        #sidebar { min-width: 250px; background-color: #ffffff; padding-top: 20px; box-shadow: 2px 0 5px rgba(0,0,0,0.1); }
        #main-content { flex-grow: 1; padding: 20px; }
        .menu-title { font-weight: bold; padding: 10px 20px; color: #003366; text-transform: uppercase; font-size: 0.9em; border-bottom: 1px solid #eee; }
        .menu-link { display: block; padding: 8px 20px 8px 30px; color: #333; text-decoration: none; font-size: 0.9em; }
        .menu-link:hover { background-color: #e6f7ff; color: #0056b3; }
        .cell-link { padding-left: 45px; font-size: 0.8em; color: #555; }
    </style>
</head>
<body>

    <header id="header">
        <div style="font-size: 1.5em; font-weight: bold;">ORGANOGRAMA SEINFRA</div>
        <div style="text-align: right;">
            {{-- Adicione a logo de Sobral aqui se tiver o caminho --}}
            {{-- <img src="{{ asset('caminho/para/logo-sobral.png') }}" alt="Prefeitura de Sobral"> --}}
            <h4 style="margin: 0;">PREFEITURA DE SOBRAL</h4>
            <small>SECRETARIA MUNICIPAL DE INFRAESTRUTURA</small>
        </div>
    </header>

    <div id="container">
        {{-- MENU LATERAL (SIDEBAR) --}}
        <aside id="sidebar">
            <a href="{{ route('index') }}" class="menu-title" style="border:none;">SECRETÁRIO (Dashboard)</a>

            {{-- Coordenadoria de Obras --}}
            <div class="menu-title">Coordenadoria de Obras</div>
            <a href="{{ route('cob.fiscalizacaoedificacao') }}" class="menu-link cell-link">Fiscalização Edificação/Vias</a>
            <a href="{{ route('cob.manutencaopredial') }}" class="menu-link cell-link">Manutenção Predial</a>
            <a href="{{ route('cob.fiscalizacaosaneamento') }}" class="menu-link cell-link">Fiscalização Obras Saneamento</a>
            <a href="{{ route('cob.planejamento') }}" class="menu-link cell-link">Planejamento</a>

            {{-- Coordenadoria de Projetos --}}
            <div class="menu-title">Coordenadoria de Projetos</div>
            <a href="{{ route('cproj.organizacao-obras') }}" class="menu-link cell-link">Organização de Obras</a>
            <a href="{{ route('cproj.arquitetonicos') }}" class="menu-link cell-link">Projetos Arquitetônicos</a>
            <a href="{{ route('cproj.complementares') }}" class="menu-link cell-link">Projetos Complementares</a>

            {{-- Coordenadoria da Usina de Asfalto --}}
            <div class="menu-title">Coordenadoria da Usina de Asfalto</div>
            <a href="{{ route('cusa.logistica') }}" class="menu-link cell-link">Logística</a>

            {{-- Coordenadoria de Manutenção --}}
            <div class="menu-title">Coordenadoria de Manutenção</div>
            <a href="{{ route('cman.sede-01') }}" class="menu-link cell-link">Gestão Operacional - Sede 01</a>
            <a href="{{ route('cman.sede-02') }}" class="menu-link cell-link">Gestão Operacional - Sede 02</a>
            <a href="{{ route('cman.distrito-oeste-03') }}" class="menu-link cell-link">Gestão Operacional - Distrito Oeste 03</a>
            <a href="{{ route('cman.distrito-leste-04') }}" class="menu-link cell-link">Gestão Operacional - Distrito Oeste 04</a>

            {{-- Coordenadoria Jurídica --}}
            <div class="menu-title">Coordenadoria Jurídica</div>
            <a href="{{ route('cjur.contratos') }}" class="menu-link cell-link">Gestão de Contratos</a>
            <a href="{{ route('cjur.avaliacao-imoveis') }}" class="menu-link cell-link">Avaliação de imóveis</a>
            <a href="{{ route('cjur.auditoria-interna') }}" class="menu-link cell-link">Auditoria interna</a>

            {{-- Coordenadoria Administrativa Financeira --}}
            <div class="menu-title">Coordenadoria Adm. Financeira</div>
            <a href="{{ route('caf.convenios') }}" class="menu-link cell-link">Gestão de Convênios</a>
            <a href="{{ route('caf.acompanhamento-social') }}" class="menu-link cell-link">Acompanhamento social</a>
            <a href="{{ route('caf.gestao-logistica') }}" class="menu-link cell-link">Gestão e Logística</a>
            <a href="{{ route('caf.ti') }}" class="menu-link cell-link">Tecnologia da informação</a>
            <a href="{{ route('caf.orcamento-adm') }}" class="menu-link cell-link">Orçamento administrativo</a>
        </aside>

        {{-- CONTEÚDO PRINCIPAL (MAIN CONTENT) --}}
        <main id="main-content">
            @yield('content')
        </main>
    </div>

</body>
</html>
