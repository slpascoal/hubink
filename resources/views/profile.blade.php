<x-layout.app>
    <x-container>
        <x-card title="Perfil">
            <x-form :route="route('profile')" put id="form" enctype="multipart/form-data">
                <div class="flex gap-2 items-center">
                    <div class="avatar">
                        <div class="w-24 rounded-xl">
                            <img src="/storage/{{$user->photo}}" alt="Foto de Perfil" />
                        </div>
                    </div>
                    <x-file-input name="photo"/>
                    @error('photo')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <x-input name="name" placeholder="Nome" value="{{old('name', $user->name)}}" />
                <x-textarea name="description" placeholder="Descrição" value="{{old('descriptio', $user->description)}}" />
                <x-input name="handler" prefix="hubink.com.br/@" placeholder="seulink" value="{{old(substr('handler',1), substr($user->handler, 1))}}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancelar</x-a>
                <x-button type="submit" form="form">Salvar</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
