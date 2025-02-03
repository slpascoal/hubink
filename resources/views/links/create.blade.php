<title>Criar um Link</title>

<div>
    <h1>Criar um Link</h1>

    <div>
        <form action="{{ route('links.create') }}" method="post">
            @csrf

            <div>
                <input type="text" name="link" placeholder="link" value="{{old('link')}}" required/>
                @error('link')
                <span>{{$message}}</span>
                @enderror
            </div>
            <br />
            <div>
                <input type="text" name="name" placeholder="Nome" value="{{old('name')}}" required/>
                @error('name')
                <span>{{$message}}</span>
                @enderror
            </div>
            <br />
            <button>Salvar</button>
        </form>
    </div>
</div>
