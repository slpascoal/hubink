<x-layout.app>
    <x-container>
        <x-card title="Registrar">
            <x-form :route="route('register')" post id="register-form">
                <x-input name="name" placeholder="Name" value="{{old('name')}}" required/>
                <x-input name="email" placeholder="Email" value="{{old('email')}}" required/>
                <x-input name="email_confirmation" placeholder="Confirme o Email" required/>
                <x-input name="password" type="password" placeholder="Senha" required/>
            </x-form>

            <x-slot:actions>
                <x-a :href="route('login')">Já possui uma conta?</x-a>
                <x-button form="register-form">Registrar</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
