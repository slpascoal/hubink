<x-layout.app>
    <x-container>
        <div class="absolute top-10 left-10 flex flex-col gap-4">
            <x-button ghost :href="route('profile')">Meu Perfil</x-button>
            <x-button ghost :href="route('links.create')">Novo Link</x-button>
        </div>
        <div class="absolute top-10 right-10 flex flex-col gap-4">
            @if($user->handler)
                <x-button outline :href="route('handler', $user->handler)">Visualizar</x-button>
            @endif
            <x-button ghost :href="route('logout')">Sair</x-button>
        </div>
            <div class="text-center space-y-2">
                <x-img src="/storage/{{$user->photo}}" alt="Foto de Perfil" width="100px" />
                <h1 class="font-bold text-2xl tracking-wider">{{$user->name}}</h1>
                <p class="text-sm italic opacity-85 pb-2">{{$user->description}}</p>

                <ul class="space-y-2">
                    @foreach($links as $link)
                        <li class="flex items-center justify-center gap-2">
                            @unless($loop->last)
                                <x-form :route="route('links.down', $link)" patch>
                                    <x-button ghost>
                                        <x-icons.arrow-down class="w-6 h-6"/>
                                    </x-button>
                                </x-form>

                                @else
                                    <x-button disabled ghost>
                                        <x-icons.arrow-down class="w-6 h-6"/>
                                    </x-button>
                            @endunless
                            @unless($loop->first)
                                <x-form :route="route('links.up', $link)" patch>
                                    <x-button ghost>
                                        <x-icons.arrow-up class="w-6 h-6"/>
                                    </x-button>
                                </x-form>

                                @else
                                    <x-button disabled ghost>
                                        <x-icons.arrow-up class="w-6 h-6"/>
                                    </x-button>
                            @endunless
                            <x-button href="{{route('links.edit', $link)}}" wide outline info>
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
