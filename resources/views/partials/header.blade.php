<header class="flex justify-between gap-20 items-center">
    <a href="{{route ('index')}}"><h1 class="font-bold text-3xl uppercase text-blue-950">Organograma</h1></a>
    <ul class="flex gap-4 *:bg-blue-900 *:hover:bg-blue-300 *:hover:text-blue-900 *:transition text-blue-50 *:text-balance *:rounded-2xl *:px-2 *:py-1 text-center *:content-center">
        <div class="relative group inline-block">
            <button>
                Coordenadoria de obras
            </button>
            <div class="w-full absolute z-10 left-0 hidden group-hover:block ">
                <div class=" pt-2 pb-4">
                    <div class="grid grid-cols-1  *:bg-blue-400 *:text-blue-50 *:hover:bg-blue-200 *:transition *:text-balance *:hover:text-blue-800 rounded-2xl overflow-hidden divide-y divide-blue-300">
                        <a href="{{route ('cdo.fiscalizacaoObrasEdificacao')}}"><p>Célula de fiscalização de obras e edificação/vias</p></a>
                        <a href="#"><p>Célula de manutenção predial</p></a>
                        <a href="#"><p>Célula de fiscalização de obras de saneamento</p></a>
                        <a href="#"><p>Célula de planejamento</p></a>
                    </div>
                </div>
            </div>
        </div>
        <a href="">
            <li>Coordenadoria de projetos</li>
        </a>
        <a href="">
            <li>Coordenadoria da usina de asfalto</li>
        </a>
        <a href="">
            <li>Coordenadoria de manutenção</li>
        </a>
        <a href="">
            <li>Coordenadoria jurídica</li>
        </a>
        <a href="">
            <li>Coordenadoria administrativa financeira</li>
        </a>
    </ul>
</header>
