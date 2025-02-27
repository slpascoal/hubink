<x-layout.app>
    <div class="mx-auto max-w-screen-md flex items-center justify-center py-20">
        <div class="card bg-zinc-900 w-96 shadow-xl">
            <div class="card-body">
                <h1 class="card-title">Registrar</h1>

                <div>
                    <form action="{{ route('register') }}" method="post">
                        @csrf

                        <div>
                            <input class="input input-bordered" type="text" name="name" placeholder="Nome Completo" value="{{old('name')}}" required/>
                            @error('name')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <br />
                        <div>
                            <input class="input input-bordered" type="email" name="email" placeholder="Email" value="{{old('email')}}" required/>
                            @error('email')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <br />
                        <div>
                            <input class="input input-bordered" type="email" name="email_confirmation" placeholder="Confirme o email" required/>
                            @error('email_confirmation')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <br />
                        <div>
                            <input class="input input-bordered" type="password" name="password" placeholder="Senha" required/>
                            @error('password')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <br />
                        <button class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
