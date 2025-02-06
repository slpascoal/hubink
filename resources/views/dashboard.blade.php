<title>Hubink - Dashboard</title>

<div class="bg-sky-500">
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
