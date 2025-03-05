<x-layout.app>
    <x-container>
        <x-card title="Criar um Link">
            <x-form :route="route('links.create')" post id="form">
                <x-input name="link" placeholder="Link" value="{{old('link')}}" />
                <x-input name="name" placeholder="Nome" value="{{old('name')}}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancelar</x-a>
                <x-button type="submit" form="form">Salvar</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
