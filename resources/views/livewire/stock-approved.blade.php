<div>
    <a x-data="{ tooltip: 'Edite' }" wire:click="data" class="cursor-pointer">
        <svg class="h-6 w-6 text-black" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" />
            <rect x="5" y="3" width="14" height="18" rx="2" />
            <line x1="9" y1="7" x2="15" y2="7" />
            <line x1="9" y1="11" x2="15" y2="11" />
            <line x1="9" y1="15" x2="13" y2="15" />
        </svg>
    </a>


    <x-dialog-modal wire:model="open" :max-width="$maxWidth">
        <x-slot name='title'>
            <h1>Modified Stock</h1>
        </x-slot>

        <x-slot name='content'>
            <table class="w-full border-collapse bg-white text-left text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th>#</th>
                        <th>Original</th>
                        <th>Modified</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                    <tr scope="col" class="px-6 py-4 font-medium text-gray-900 max-h-52">
                        <th  class="w-44 h-12 bg-gray-50" >
                            Product name 
                        </th>
                        <td>
                            <div class="text-sm">
                                <div class="font-medium text-gray-700">{{ $inventory->product->product_name }}</div>
                            </div>
                        </td>
                        <td>
                            <div class="text-sm">
                                <div class="font-medium text-gray-700">{{ $inventory_aux->product->product_name }}</div>
                            </div>
                        </td>
                    </tr>
                    <tr scope="col" class="px-6 py-4 font-medium text-gray-900">
                        <th  class="bg-gray-50 w-44 h-12">
                            warehouse
                        </th>
                        <td>
                            <div class="text-sm">
                                <div class="font-medium text-gray-700">{{ $inventory->warehouse->warehouse_name }}</div>
                            </div>
                        </td>
                        <td>
                            <div class="text-sm">
                                <div class="font-medium text-gray-700">{{  $inventory_aux->warehouse->warehouse_name }}</div>
                            </div>
                        </td>
                    </tr>
                    <tr scope="col" class="px-6 py-4 font-medium text-gray-900">
                        <th  class="bg-gray-50 w-44 h-12">
                            Stock
                        </th>
                        <td>
                            <div class="text-sm">
                                <div class="font-medium text-gray-700">{{ $inventory->stock }}</div>
                            </div>
                        </td>
                        <td>
                            <div class="text-sm">
                                <div class="font-medium text-gray-700">{{ $inventory_aux->stock }}</div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
           


        </x-slot>

        <x-slot name='footer'>
            <x-button wire:click="reject">
                Rejected
             </x-button>
            <x-button wire:click="save">
                Approve
            </x-button>
           
        </x-slot>



    </x-dialog-modal>
</div>
