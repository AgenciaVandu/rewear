<div>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex justify-between items-center">
                <h1 class="font-semibold text-xl text-trueGray-700 leading-tight">Productos</h1>
                <x-jet-danger-button wire:click="$emit('deleteProduct')">Eliminar</x-jet-danger-button>
            </div>
        </div>
    </header>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-trueGray-700">
        <h1 class="text-3xl text-center font-semibold mb-8">Complete esta información para crear un producto</h1>
        <div class="mb-4" wire:ignore>
            <form action="{{ route('admin.products.files', $product) }}" class="dropzone"
                id="my-awesome-dropzone" method="POST">
            </form>
        </div>

        @if ($product->images->count())
            <section class="bg-white shadow-lg rounded-lg p-6 mb-4">
                <h1 class="text-2xl text-center font-semibold mb-2">
                    Imagenes del producto
                </h1>

                <ul class="flex flex-wrap">
                    @foreach ($product->images as $image)
                        <li class="relative" wire:key="image-{{ $image->id }}">
                            <img src="{{ Storage::url($image->url) }}"
                                class="w-32 h-20 mx-1 object-cover object-center" alt="">
                            <x-jet-danger-button class="absolute right-2 top-2"
                                wire:click="deleteImage({{ $image->id }})" wire:loading.attr="disabled"
                                wire:target="deleteImage({{ $image->id }})">X
                            </x-jet-danger-button>
                        </li>
                    @endforeach
                </ul>
            </section>
        @endif
        @livewire('admin.status-product', ['product' => $product], key('status-product-'.$product->id))

        <div class="bg-white shadow-lg rounded-lg p-6">
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
                    <select class="w-full form-control" wire:model="product.subcategory_id">
                        <option value="" selected disabled>Selecciona una subcategoria</option>
                        @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="product.subcategory_id" />
                </div>
            </div>
            {{-- Nombre --}}
            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="product.name" type="text" placeholder="Ingrese el nombre del producto"
                    class="w-full" />
                <x-jet-input-error for="product.name" />
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
                    <textarea wire:model="product.description" class="w-full form-control" x-ref="mieditor" rows="4"
                        x-data x-init="ClassicEditor
                    .create( $refs.mieditor )
                    .then(function(editor){
                        editor.model.document.on('change:data',() => {
                            @this.set('product.description',editor.getData())
                        })
                    })
                    .catch( error => {
                        console.error( error );
                    } );"></textarea>
                </div>
                <x-jet-input-error for="product.description" />
            </div>

            <div class="grid grid-cols-2 gap-6 mb-4">
                {{-- Marca --}}
                <div class="mb-4">
                    <x-jet-label value="Marca" />
                    <select class="w-full form-control" wire:model="product.brand_id">
                        <option value="" selected disabled>Selecciona una marca</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="product.brand_id" />
                </div>
                {{-- Precio --}}
                <div class="mb-4">
                    <x-jet-label value="Precio" />
                    <x-jet-input wire:model="product.price" type="number" placeholder="Ingrese el precio del producto"
                        class="w-full" step=".01" />
                    <x-jet-input-error for="product.price" />
                </div>
            </div>
            @if ($this->subcategory)
                @if (!$this->subcategory->color && !$this->subcategory->size)
                    {{-- Precio --}}
                    <div class="mb-4">
                        <x-jet-label value="Stock" />
                        <x-jet-input wire:model="product.quantity" type="number"
                            placeholder="Ingrese el stock del producto" class="w-full" />
                        <x-jet-input-error for="product.quantity" />
                    </div>
                @endif
            @endif

            <div class="flex justify-end items-center mt-4">
                <x-jet-action-message class="mr-3" on="saved">
                    Actualizado
                </x-jet-action-message>
                <x-jet-button wire:click="save" wire:loading.attr="disabled" wire:target="save">Actualizar producto
                </x-jet-button>
            </div>
        </div>

        @if ($this->subcategory)
            @if ($this->subcategory->size)
                @livewire('admin.size-product', ['product' => $product], key('size-product-'.$product->id))
            @elseif($this->subcategory->color)
                @livewire('admin.color-product', ['product' => $product], key('color-product-'.$product->id))
            @endif
        @endif
    </div>
    @push('script')
        <script>
            Dropzone.options.myAwesomeDropzone = { // camelized version of the `id`
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                dictDefaultMessage: "Arraste las imagenes al recuadro",
                acceptedFiles: "image/*",
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 2, // MB
                complete: function(file) {
                    this.removeFile(file);
                },
                queuecomplete: function() {
                    Livewire.emit('refreshProduct');
                }
            };

            Livewire.on('deleteSize', sizeId => {
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
                        Livewire.emitTo('admin.size-product', 'delete', sizeId);
                        Swal.fire(
                            'Eliminado!',
                            'La talla fue eliminada.',
                            'success'
                        )
                    }
                })
            });

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
                        Livewire.emitTo('admin.color-product', 'delete', pivot);
                        Swal.fire(
                            'Eliminado!',
                            'El color fue eliminado.',
                            'success'
                        )
                    }
                })
            });
            Livewire.on('deleteColorSize', pivot => {
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
                        Livewire.emitTo('admin.color-size', 'delete', pivot);
                        Swal.fire(
                            'Eliminado!',
                            'El color fue eliminado.',
                            'success'
                        )
                    }
                })
            });

            Livewire.on('deleteProduct', () => {
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
                        Livewire.emitTo('admin.edit-product', 'delete');
                        Swal.fire(
                            'Eliminado!',
                            'El producto fue eliminado.',
                            'success'
                        )
                    }
                })
            });
        </script>
    @endpush
</div>
