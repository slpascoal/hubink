<title>Login</title>

<div>
    <h1>Login</h1>

    <div>
        <form action="{{ route('login') }}" method="post">
            @csrf

            <div>
                <input type="email" name="email" placeholder="Email" value="{{old('email')}}" required/>
                @error('email')
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
            <button>Logar</button>
        </form>
    </div>
</div>
