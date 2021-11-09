<div>
    <div class="my-12 bg-white shadow-lg rounded-lg p-6">
        {{-- Color --}}
        <div class="mb-6">
            <x-jet-label value="Color" />
            <div class="grid grid-cols-6 gap-6">
                @foreach ($colors as $color)
                    <label>
                        <input type="radio" name="color_id" value="{{ $color->id }}" wire:model="color_id">
                        <span class="ml-2 text-trueGray-700 capitalize">{{ __($color->name) }}</span>
                    </label>
                @endforeach
            </div>
            <x-jet-input-error for="color_id" />
        </div>
        {{-- Cantidad --}}
        <div>
            <x-jet-label value="Cantidad" />
            <x-jet-input type="number" wire:model.defer="quantity" placeholder="Ingrese un stock"
                class="w-full" />
            <x-jet-input-error for="quantity" />
        </div>


        <div class="flex justify-end items-center mt-4">
            <x-jet-action-message class="mr-3" on="saved">
                Agregado
            </x-jet-action-message>
            <x-jet-button wire:click="save" wire:loading.attr="disabled" wire:target="save">
                Agregar variante
            </x-jet-button>
        </div>
    </div>

    @if ($product_colors->count())
        <div class="bg-white shadow-lg rounded-lg p-6">
            <table>
                <thead>
                    <tr>
                        <th class="px-4 py-2 w-1/3">Color</th>
                        <th class="px-4 py-2 w-1/3">Cantidad</th>
                        <th class="px-4 py-2 w-1/3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product_colors as $product_color)
                        <tr class="text-center" wire:key="product_color-{{ $product_color->pivot->color_id }}">
                            <td class="capitalize px-4 py-2">
                                {{ __($colors->find($product_color->pivot->color_id)->name) }}
                            </td>
                            <td class="px-4 py-2">
                                {{ $product_color->pivot->quantity }} unidades
                            </td>
                            <td class="px-4 py-2 flex">
                                <x-jet-secondary-button class="ml-auto mr-2"
                                    wire:click="edit({{ $product_color->pivot->id }})" wire:loading.attr="disabled"
                                    wire:target="edit({{ $product_color->pivot->id }})">Actualizar
                                </x-jet-secondary-button>
                                <x-jet-danger-button
                                    wire:click="$emit('deletePivot',{{ $product_color->pivot->id }})">
                                    Eliminar</x-jet-danger-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Editar color
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Color" />
                <select class="w-full form-control" wire:model="pivot_color_id">
                    <option value="">Selecciona un color</option>
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ ucfirst(__($color->name)) }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <x-jet-label value="Cantidad" />
                <x-jet-input type="number" placeholder="Ingrese una cantidad" class="w-full"
                    wire:model="pivot_quantity" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button class="ml-auto mr-2" wire:click="$set('open',false)">Cancelar
            </x-jet-secondary-button>
            <x-jet-button wire:click="update" wire:loading.attr="disabled" wire:target='update'>Actualizar
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>

    @push('script')
        <script>
            Livewire.on('deletePivot', pivot => {
                Swal.fire({
                    title: 'Estas seguro?',
                    text: "No podras revertir los cambios",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('admin.color-product','delete', pivot);
                        Swal.fire(
                            'Eliminado!',
                            'El color fue eliminado.',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endpush
</div>
