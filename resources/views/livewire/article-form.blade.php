<div>
    <x-jet-form-section submit="save">
        <x-slot name="title">
            Formulario para guardar articulos
        </x-slot>
        <x-slot name="description">>
            En este formulario se puede crear y editar articulos
        </x-slot>
        <x-slot name="form">

            <x-jet-validation-errors></x-jet-validation-errors>


            <x-jet-label>Titulo</x-jet-label>
            <x-jet-input wire:model="article.title"></x-jet-input>

            <x-jet-label>Slug</x-jet-label>
            <x-jet-input wire:model="article.slug"></x-jet-input>

            <x-jet-label>Contenido</x-jet-label>
            <x-jet-input wire:model="article.content"></x-jet-input>

            <x-jet-button type="submit">
                Enviar
            </x-jet-button>

        </x-slot>
    </x-jet-form-section>
</div>
