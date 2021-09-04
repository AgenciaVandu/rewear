<div x-data>
    <div class="mb-2">
        <p class="text-xl text-trueGray-700">Talla:</p>

        <select wire:model="size_id" class="form-control w-full">
            <option value="" selected disabled>-Seleccione una talla-</option>

            @foreach ($sizes as $size)
                <option value="{{ $size->id }}">{{ $size->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <p class="text-xl text-trueGray-700">Color:</p>

        <select wire:model="color_id" class="form-control w-full">
            <option value="" selected disabled>-Seleccione un color-</option>
            @foreach ($colors as $color)
                <option value="{{ $color->id }}">{{ __($color->name) }}</option>
            @endforeach
        </select>
    </div>

    <div class="flex">
        <div class="mr-4">
            <x-jet-secondary-button disabled x-bind:disabled="$wire.qty <= 1" wire:loading.attr="disabled"
                wire:target="decrement" wire:click='decrement'>
                -
            </x-jet-secondary-button>
            <span class="mx-2 text-trueGray-700">{{ $qty }}</span>
            <x-jet-secondary-button disabled x-bind:disabled="$wire.qty >= $wire.quantity" wire:loading.attr="disabled"
                wire:target="increment" wire:click='increment'>
                +
            </x-jet-secondary-button>
        </div>
        <div class="flex-1">
            <x-button class="w-full" disabled x-bind:disabled="!$wire.quantity" wire:click="addItem"
                wire:loading.attr="disabled" wire:target="addItem">Agregar a carrito de compras</x-button>
        </div>
    </div>
</div>
