<x-layout.app>
    <x-container>
        <div class="flex flex-col gap-6 text-center">
            <h1 class="text-3xl">Hubink</h1>
            <p>Bem-vindo ao Hubink, seu prático gerenciador de links!</p>

            <x-button :href="route('dashboard')">
                Acessar
            </x-button>
        </div>
    </x-container>
</x-layout.app>
