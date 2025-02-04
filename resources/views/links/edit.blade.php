<title>Editar um Link</title>

<div>
    <h1>Editar um Link - {{$link->id}}</h1>

    <div>
        <form action="{{ route('links.edit', $link) }}" method="post">
            @csrf

            @method('put')

            <div>
                <input type="text" name="link" placeholder="link" value="{{old('link', $link->link)}}" required/>
                @error('link')
                <span>{{$message}}</span>
                @enderror
            </div>
            <br />
            <div>
                <input type="text" name="name" placeholder="Nome" value="{{old('name', $link->name)}}" required/>
                @error('name')
                <span>{{$message}}</span>
                @enderror
            </div>
            <br />
            <button>Salvar</button>
        </form>
    </div>
</div>
