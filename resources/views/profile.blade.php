<title>Perfil</title>

<div>
    <h1>Perfil</h1>

    <div>
        <form action="{{ route('profile') }}" method="post">
            @csrf
            @method('PUT')

            <div>
                <input type="text" name="name" placeholder="Nome" value="{{old('name', $user->name)}}" required/>
                @error('name')
                <span>{{$message}}</span>
                @enderror
            </div>
            <br />

            <div>
                <textarea type="text" name="description" placeholder="Descrição" value="{{old('name', $user->description)}}" required></textarea>
                @error('description')
                <span>{{$message}}</span>
                @enderror
            </div>
            <br />

            <div>
                <span>hubink.com.br/</span>
                <input type="text" name="handler" placeholder="@seulink" value="{{old('handler', $user->handler)}}" required />
                @error('handler')
                <span>{{$message}}</span>
                @enderror
            </div>
            <br />

            <a href="{{route('dashboard')}}">Cancelar</a>
            <button>Salvar</button>
        </form>
    </div>
</div>
