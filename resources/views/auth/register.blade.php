<title>Register</title>

<div>
    <h1>Registrar</h1>

    <div>
        <form action="{{ route('register') }}" method="post">
            @csrf

            <div>
                <input type="text" name="name" placeholder="Nome Completo" value="{{old('name')}}" required/>
                @error('name')
                <span>{{$message}}</span>
                @enderror
            </div>
            <br />
            <div>
                <input type="email" name="email" placeholder="Email" value="{{old('email')}}" required/>
                @error('email')
                <span>{{$message}}</span>
                @enderror
            </div>
            <br />
            <div>
                <input type="email" name="email_confirmation" placeholder="Confirme o email" required/>
                @error('email_confirmation')
                <span>{{$message}}</span>
                @enderror
            </div>
            <br />
            <div>
                <input type="password" name="password" placeholder="Senha" required/>
                @error('password')
                <span>{{$message}}</span>
                @enderror
            </div>
            <br />
            <button>Registrar</button>
        </form>
    </div>
</div>
