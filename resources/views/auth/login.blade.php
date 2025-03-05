<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id="login-form">
                <x-input name="email" placeholder="Email" value="{{old('email')}}" required/>
                <x-input name="password" type="password" placeholder="Senha" required/>
            </x-form>

            <x-slot:actions>
                <x-a :href="route('register')">Crie uma conta</x-a>
                <x-button form="login-form">Logar</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>

