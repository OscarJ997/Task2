<div>
    @if ($inventory->locked_by==auth()->user()->id || $inventory->locked_by=='')
    <a x-data="{ tooltip: 'Edite' }" wire:click="data" class="cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="h-6 w-6" x-tooltip="tooltip">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
        </svg>
    </a>


    @endif
    



    <x-dialog-modal wire:model="open">
        <x-slot name='title'>
            <h1>Edit Stock</h1>
        </x-slot>

        <x-slot name='content'>
            <div class="mb-3">
                <x-label value="Product" />
                <select wire:model="inventory.product_id" id="shop_id"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                    <option value="">Product</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}"
                            {{ $product->id == $this->inventory->product_id ? 'selected' : '' }}>
                            {{ $product->product_name }}</option>
                    @endforeach
                </select>
            </div>
            

            <div class="mb-3">
                <x-label value="Warehouse" />
               
                <select wire:model="inventory.warehouse_id" id="shop_id"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                    <option value="">warehouse</option>
                    @foreach ($warehouses as $warehouse)
                        <option value="{{ $warehouse->id }}"
                            {{ $warehouse->id == $this->inventory->warehouse_id ? 'selected' : '' }}>
                            {{$warehouse->warehouse_name  }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <x-label value="Price" />
                <x-input wire:model="inventory.stock" type="text" class="w-full"/>
            </div>




        </x-slot>

        <x-slot name='footer'>
            <x-button wire:click="save">
                Update
            </x-button>
        </x-slot>



    </x-dialog-modal>
</div>
