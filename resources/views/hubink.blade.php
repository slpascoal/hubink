<x-layout.app>
    <div>
        <x-img src="/storage/{{$user->photo}}" alt="Foto de Perfil" width="100px" />

        <h2>{{$user->name}}</h2>

        <p>{{$user->description}}</p>

        <ul>
            @foreach($user->links as $link)
                <li style="display: flex">
                    <a href="{{$link->link}}" target="_blank">
                        {{$link->sort}} - {{$link->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout.app>
