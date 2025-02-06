<title>Perfil</title>

<div>
    <h1>Perfil</h1>

    @if($message = session()->get('message'))
        <div>{{$message}}</div>
    @endif

    <div>
        <form action="{{ route('profile') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <img src="/storage/{{$user->photo}}" alt="Foto de Perfil" width="100px">
                <input type="file" name="photo"/>
                @error('photo')
                <span>{{$message}}</span>
                @enderror
            </div>
            <br />

            <div>
                <input type="text" name="name" placeholder="Nome" value="{{old('name', $user->name)}}" required/>
                @error('name')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <br />

            <div>
                <textarea name="description" placeholder="Descrição" required>{{ old('description', $user->description) }}</textarea>
                @error('description')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <br />

            <div>
                <span>hubink.com.br/@</span>
                <input type="text" name="handler" placeholder="seulink" value="{{old('handler', $user->handler)}}" required />
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
