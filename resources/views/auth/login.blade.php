<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id="login-form">
                <x-input name="email" placeholder="Email" value="{{old('email')}}" />
                <x-input name="password" type="password" placeholder="Senha" />
            </x-form>

            <x-slot:actions>
                <x-button form="login-form">Logar</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
    <div class="mx-auto max-w-screen-md flex items-center justify-center py-20">
        <div class="card bg-zinc-900 w-96 shadow-xl">
            <div class="card-body">
                <h1 class="card-title">Login</h1>

                <div>
                    <form action="{{ route('login') }}" method="post" id="login-form">
                        @csrf

                        <div>
                            <input class="input input-bordered" type="email" name="email" placeholder="Email" value="{{old('email')}}" required/>
                            @error('email')
                            <div class="text-sm text-error">{{$message}}</div>
                            @enderror
                        </div>
                        <br />
                        <div>
                            <input class="input input-bordered" type="password" name="password" placeholder="Senha" required/>
                            @error('password')
                            <div class="text-sm text-error">{{$message}}</div>
                            @enderror
                        </div>
                        <br />
                    </form>
                    <div class="card-actions">
                        <button class="btn btn-primary" type="submit" form="login-form">Logar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>

