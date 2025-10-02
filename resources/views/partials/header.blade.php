<header class="container m-auto mt-4 flex justify-between gap-8 items-center">
    <a href="{{ route('index') }}">
        <h1 class="font-bold text-3xl uppercase text-blue-950 flex-shrink-0">Organograma</h1>
    </a>

    <nav class="flex-1">
        <ul class="flex gap-4 justify-center items-center text-center text-blue-50 text-balance">
            <li class="relative group">
                <button
                    class="inline-block transition rounded-2xl px-3 py-2 bg-blue-900 hover:bg-blue-300 hover:text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Coordenadoria de obras
                </button>
                <div class="w-full absolute z-10 left-0 hidden group-hover:block focus-within:block">
                    <div class="pt-2">
                        <div class="grid grid-cols-1 rounded-2xl overflow-hidden divide-y divide-blue-300 shadow-lg">
                            <a class="block px-4 py-2 bg-blue-400 text-blue-50 hover:bg-blue-200 transition hover:text-blue-800"
                               href="{{ route('cdo.fiscalizacaoObrasEdificacao') }}">Célula de fiscalização de obras e
                                edificação/vias</a>
                            <a class="block px-4 py-2 bg-blue-400 text-blue-50 hover:bg-blue-200 transition hover:text-blue-800"
                               href="{{route('cdo.manutencaoPredial')}}">Célula de manutenção predial</a>
                            <a class="block px-4 py-2 bg-blue-400 text-blue-50 hover:bg-blue-200 transition hover:text-blue-800"
                               href="{{route('cdo.fiscalizacaoObrasSaneamento')}}">Célula de fiscalização de obras de
                                saneamento</a>
                            <a class="block px-4 py-2 bg-blue-400 text-blue-50 hover:bg-blue-200 transition hover:text-blue-800"
                               href="{{route('cdo.planejamento')}}">Célula de planejamento</a>
                        </div>
                    </div>
                </div>
            </li>

            <li><a href="#"
                   class="block transition rounded-2xl px-3 py-2 bg-blue-900 hover:bg-blue-300 hover:text-blue-900">Coordenadoria
                    de projetos</a></li>
            <li><a href="#"
                   class="block transition rounded-2xl px-3 py-2 bg-blue-900 hover:bg-blue-300 hover:text-blue-900">Coordenadoria
                    da usina de asfalto</a></li>
            <li><a href="#"
                   class="block transition rounded-2xl px-3 py-2 bg-blue-900 hover:bg-blue-300 hover:text-blue-900">Coordenadoria
                    de manutenção</a></li>
            <li><a href="#"
                   class="block transition rounded-2xl px-3 py-2 bg-blue-900 hover:bg-blue-300 hover:text-blue-900">Coordenadoria
                    jurídica</a></li>
            <li><a href="#"
                   class="block transition rounded-2xl px-3 py-2 bg-blue-900 hover:bg-blue-300 hover:text-blue-900">Coordenadoria
                    administrativa financeira</a></li>
        </ul>
    </nav>
</header>
