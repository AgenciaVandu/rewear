<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px8 py-12 text-trueGray-700">
    <h1 class="text-3xl text-center font-semibold mb-8">Complete esta información para crear un producto</h1>

    <div class="grid grid-cols-2 gap-6 mb-4">
        {{-- Categorias --}}
        <div>
            <x-jet-label value="Categorias" />
            <select class="w-full form-control" wire:model="category_id">
                <option value="" selected disabled>Selecciona una categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <x-jet-input-error for="category_id" />
        </div>

        {{-- Subcategorias --}}
        <div>
            <x-jet-label value="Subcategorias" />
            <select class="w-full form-control" wire:model="subcategory_id">
                <option value="" selected disabled>Selecciona una subcategoria</option>
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endforeach
            </select>
            <x-jet-input-error for="subcategory_id" />
        </div>
    </div>
    {{-- Nombre --}}
    <div class="mb-4">
        <x-jet-label value="Nombre" />
        <x-jet-input wire:model="name" type="text" placeholder="Ingrese el nombre del producto" class="w-full" />
        <x-jet-input-error for="name" />
    </div>
    {{-- Slug --}}
    <div class="mb-4">
        <x-jet-label value="Slug" />
        <x-jet-input wire:model="slug" disabled type="text" placeholder="Ingrese el slug del producto"
            class="w-full bg-trueGray-200" />
        <x-jet-input-error for="slug" />
    </div>
    {{-- Descripcion --}}
    <div class="mb-4">
        <div wire:ignore>
            <x-jet-label value="Descripción" />
            <textarea wire:model="description" class="w-full form-control" x-ref="mieditor" rows="4" x-data x-init="ClassicEditor
            .create( $refs.mieditor )
            .then(function(editor){
                editor.model.document.on('change:data',() => {
                    @this.set('description',editor.getData())
                })
            })
            .catch( error => {
                console.error( error );
            } );"></textarea>
        </div>
        <x-jet-input-error for="description" />
    </div>

    <div class="grid grid-cols-2 gap-6 mb-4">
        {{-- Medidas del modelo --}}
        <div class="mb-4">
            <x-jet-label value="Medidas del modelo" />
            <x-jet-input wire:model="measure" type="text" placeholder="Ingrese las medidas del modelo"
                class="w-full" />
                <x-jet-input-error for="measure"/>
        </div>

        {{-- Talla del modelo --}}
        <div class="mb-4">
            <x-jet-label value="Talla del modelo" />
            <x-jet-input wire:model="size" type="text" placeholder="Ingrese la talla del modelo"
                class="w-full" />
                <x-jet-input-error for="size"/>
        </div>
    </div>
    <div class="flex justify-end mt-4">
        <x-jet-button wire:click="save" wire:loading.attr="disabled" wire:target="save">Crear producto</x-jet-button>
    </div>
</div>
