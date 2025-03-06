<x-layout.app>
    <x-container>
        <div class="text-center space-y-2">
            <x-img src="/storage/{{$user->photo}}" alt="Foto de Perfil" width="100px" />
            <h1 class="font-bold text-2xl tracking-wider">{{$user->name}}</h1>
            <p class="text-sm italic opacity-85 pb-2">{{$user->description}}</p>

            <ul class="space-y-2">
                @foreach($user->links as $link)
                    <li class="flex items-center justify-center gap-2">
                        <x-button href="{{$link->link}}" wide outline info target="_blank">
                            {{$link->name}}
                        </x-button>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>
