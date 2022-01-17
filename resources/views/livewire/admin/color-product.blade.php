<div>
    @foreach ($colors as $color)
        <label>
            <input type="radio" wire:model="colors_id" name="colors_id" value="{{ $color->id }}">
            <span class="capitalize">{{ __($color->name) }}</span>
        </label>
    @endforeach

    <div class="mt-2">
        <h2 class="text-lg font-bold">Lista de colores asignados</h2>
        @foreach ($color_product as $item)
            <div class="flex capitalize justify-between">
                <div>
                    {{ __($item->color->name) }}
                </div>
                <div>
                    <a wire:click="delete({{ $item->id }})"
                        class="text-sm cursor-pointer hover:text-gray-100">Eliminar</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex items-center justify-end mt-8">
        <x-jet-button wire:click="save">Agregar color</x-jet-button>
    </div>
</div>
