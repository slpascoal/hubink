<x-layout.app>
    <x-container>
        <x-card title="Editar um Link - {{$link->id}}">
            <x-form :route="route('links.edit', $link)" put id="form">
                <x-input name="link" placeholder="Link" value="{{old('link', $link->link)}}" />
                <x-input name="name" placeholder="Nome" value="{{old('name', $link->name)}}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancelar</x-a>
                <x-button type="submit" form="form">Salvar</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
