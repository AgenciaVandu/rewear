<div>
    <x-jet-form-section submit="save" class="mb-6">
        <x-slot name="title">
            Crear nueva subcategoria
        </x-slot>

        <x-slot name="description">
            Complete la informacion necesaria para crear una nueva subcategoria
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="createForm.name" type="text" placeholder="Nombre de categoria"
                    class="w-full" />
                <x-jet-input-error for="createForm.name" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label value="Slug" />
                <x-jet-input wire:model="createForm.slug" disabled type="text" placeholder="Slug de categoria"
                    class="w-full bg-trueGray-100" />
                <x-jet-input-error for="createForm.slug" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <div class="flex items-center">
                    <p>Esta subcategoria necesita especificar color?</p>
                    <div class="ml-auto">
                        <label>
                            <input type="radio" name="color" value="1" wire:model="createForm.color">
                            Si
                        </label>
                        <label>
                            <input type="radio" name="color" value="0" wire:model="createForm.color">
                            No
                        </label>
                    </div>
                </div>
            </div>

        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                Categoria creada
            </x-jet-action-message>
            <x-jet-button>Agregar</x-jet-button>
        </x-slot>
    </x-jet-form-section>
</div>
