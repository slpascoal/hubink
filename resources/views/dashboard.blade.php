<x-layout.app>
    <x-container>
            <div class="text-center space-y-2">
                <x-img src="/storage/{{$user->photo}}" alt="Foto de Perfil" width="100px" />
                <h1 class="font-bold text-2xl tracking-wider">{{$user->name}}</h1>
                <p class="text-sm italic opacity-85">{{$user->description}}</p>

                <ul class="space-y-2">
                    @foreach($links as $link)
                        <li class="flex items-center gap-2">
                            <x-button href="{{route('links.edit', $link)}}" block outline info>
                                {{$link->name}}
                            </x-button>
                            <x-form :route="route('links.destroy', $link)" delete onsubmit="return confirm('Tem certeza?')">
                                <x-button ghost>
                                    <x-icons.trash class="w-6 h-6"/>
                                </x-button>
                            </x-form>
                        </li>
                    @endforeach
                </ul>
            </div>
    </x-container>
</x-layout.app>


<x-layout.app>
    <div>
        <h1>Dashboard</h1>

        <h3>Olá {{auth()->user()->name}}</h3>
        <a href="{{ route('profile') }}">Meu Perfil</a>

        @if($message = session()->get('message'))
            <div>{{$message}}</div>
        @endif

        <a href="{{route('links.create')}}">Criar</a>

        <ul>
            @foreach($links as $link)
                <li style="display: flex">

                    @unless($loop->first)
                        <form action="{{route('links.up', $link)}}" method="post">
                            @csrf
                            @method('PATCH')

                            <button>⬆</button>
                        </form>
                    @endunless

                    @unless($loop->last)
                        <form action="{{route('links.down', $link)}}" method="post">
                            @csrf
                            @method('PATCH')

                            <button>⬇</button>
                        </form>
                    @endunless

                    <a href="{{route('links.edit', $link)}}">{{$link->sort}} - {{$link->name}}</a>

                    <form action="{{route('links.destroy', $link)}}" method="post" onsubmit="return confirm('Tem certeza?')">
                        @csrf
                        @method('DELETE')

                        <button>Deletar</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <a href="{{route('logout')}}">Sair</a>
    </div>
</x-layout.app>
