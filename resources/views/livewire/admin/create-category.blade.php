<div>
    <x-jet-form-section submit="save" class="mb-6">
        <x-slot name="title">
            Crear nueva categoria
        </x-slot>

        <x-slot name="description">
            Complete la informacion necesaria para crear una nueva categoria
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
                <x-jet-label value="Icono" />
                <x-jet-input wire:model.defer="createForm.icon" type="text" placeholder="Icono de categoria"
                    class="w-full" />
                <x-jet-input-error for="createForm.icon" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label value="Marcas" />
                <div class="grid grid-cols-4">
                    @foreach ($brands as $brand)
                        <x-jet-label>
                            <x-jet-checkbox wire:model.defer="createForm.brands" name="brands[]"
                                value="{{ $brand->id }}" />
                            {{ $brand->name }}
                        </x-jet-label>
                    @endforeach
                </div>
                <x-jet-input-error for="createForm.brands" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label value="Imagen" />
                <x-jet-input wire:model="createForm.image" type="file" accept="image/*" class="mt-1 w-full"
                    id="{{ $rand }}" />
                <x-jet-input-error for="createForm.image" />
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                Categoria creada
            </x-jet-action-message>
            <x-jet-button>Agregar</x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <x-jet-action-section>
        <x-slot name="title">
            Lista de categorias
        </x-slot>
        <x-slot name="description">
            Aqui encontrara todas las categorias agregadas
        </x-slot>
        <x-slot name="content">
            <table class="text-trueGray-600">
                <thead class="border-b border-trueGray-500">
                    <tr>
                        <th class="w-full py-2 text-left">Nombre</th>
                        <th class="py-2">Accion</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-trueGray-200">
                    @foreach ($categories as $category)
                        <tr>
                            <td class="py-2">
                                <span class="inline-block w-8 text-center mr-2">
                                    {!! $category->icon !!}
                                </span>
                                <span class="uppercase">
                                    <a href="{{ route('admin.categories.show', $category) }}" class="hover:underline hover:text-blue-600">{{ $category->name }}</a>
                                </span>
                            </td>
                            <td class="py-2">
                                <div class="flex justify-end items-center divide-x divide-trueGray-500 font-semibold">
                                    <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                        wire:click="edit('{{ $category->slug }}')">Editar</a>
                                    <a wire:click="$emit('deleteCategory','{{ $category->slug }}')"
                                        class="pl-2 hover:text-red-600 cursor-pointer">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-slot>
    </x-jet-action-section>

    <x-jet-dialog-modal wire:model="editForm.open">
        <x-slot name="title">Editar Categoria</x-slot>
        <x-slot name="content">
            <div class="space-y-3">
                <div>
                    @if ($editImage)
                        <img src="{{ $editImage->temporaryUrl() }}" class="w-full h-64 object-cover object-center">
                    @else
                        <img src="{{ Storage::url($editForm['image']) }}"
                            class="w-full h-64 object-cover object-center">
                    @endif
                </div>
                <div>
                    <x-jet-label value="Nombre" />
                    <x-jet-input wire:model="editForm.name" type="text" placeholder="Nombre de categoria"
                        class="w-full" />
                    <x-jet-input-error for="editForm.name" />
                </div>
                <div>
                    <x-jet-label value="Slug" />
                    <x-jet-input wire:model="editForm.slug" disabled type="text" placeholder="Slug de categoria"
                        class="w-full bg-trueGray-100" />
                    <x-jet-input-error for="editForm.slug" />
                </div>
                <div>
                    <x-jet-label value="Icono" />
                    <x-jet-input wire:model.defer="editForm.icon" type="text" placeholder="Icono de categoria"
                        class="w-full" />
                    <x-jet-input-error for="editForm.icon" />
                </div>
                <div>
                    <x-jet-label value="Marcas" />
                    <div class="grid grid-cols-4">
                        @foreach ($brands as $brand)
                            <x-jet-label>
                                <x-jet-checkbox wire:model.defer="editForm.brands" name="brands[]"
                                    value="{{ $brand->id }}" />
                                {{ $brand->name }}
                            </x-jet-label>
                        @endforeach
                    </div>
                    <x-jet-input-error for="editForm.brands" />
                </div>
                <div>
                    <x-jet-label value="Imagen" />
                    <x-jet-input wire:model="editImage" type="file" accept="image/*" class="mt-1 w-full"
                        id="{{ $rand }}" />
                    <x-jet-input-error for="editImage" />
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-button wire:loading.attr="disabled" wire:target="editImage,update" wire:click="update">Actualizar
            </x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>
