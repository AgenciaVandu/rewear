<div>
    @foreach ($sizes as $size)
        <label>
            <input type="radio" wire:model="sizes_id" name="sizes_id" value="{{ $size->id }}">
            <span class="capitalize mr-2">{{ __($size->code) }}</span>
        </label>
    @endforeach

    <div class="mt-2">
        <h2 class="text-lg font-bold">Lista de colores asignados</h2>
        @foreach ($size_product as $item)
            <div class="flex capitalize justify-between">
                <div>
                    {{ __($item->size->name) }}
                </div>
                <div>
                    <a wire:click="delete({{ $item->id }})"
                        class="text-sm cursor-pointer hover:text-gray-100">Eliminar</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex items-center justify-end mt-8">
        <x-jet-button wire:click="save">Agregar talla</x-jet-button>
    </div>
</div>
