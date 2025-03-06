<x-layout.app>
    <x-container>
            <div class="text-center space-y-2">
                <x-img src="/storage/{{$user->photo}}" alt="Foto de Perfil" width="100px" />
                <h1 class="font-bold text-2xl tracking-wider">{{$user->name}}</h1>
                <p class="text-sm italic opacity-85">{{$user->description}}</p>

                <ul class="space-y-2">
                    @foreach($links as $link)
                        <li class="flex items-center gap-2">
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
