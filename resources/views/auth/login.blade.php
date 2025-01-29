<div>
    <h1>Login</h1>

    <div>
        <form action="/login" method="post">
            @csrf

            <div>
                <input type="email" name="email" placeholder="Email" value="{{old('email')}}"/>
            </div>

            <div>
                <input type="password" name="password" placeholder="Senha"/>
            </div>

            <button>Logar</button>
        </form>
    </div>
</div>
