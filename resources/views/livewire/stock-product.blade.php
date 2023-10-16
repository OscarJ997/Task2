<div>
    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">




        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-neutral-800 text-white dark:border-neutral-500 dark:bg-neutral-900">
                <tr>
                    <th scope="col" class="px-6 py-4 font-light ">Produc Name</th>
                    <th scope="col" class="px-6 py-4 font-light ">warehouse</th>
                    <th scope="col" class="px-6 py-4 font-light ">address</th>
                    <th scope="col" class="px-6 py-4 font-light ">stock</th>
                    <th scope="col" class="px-6 py-4 font-light ">Status</th>
                    <th scope="col" class="px-6 py-4 font-light ">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @foreach ($products as $product)
                    <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                            <div class="text-sm">
                                <div class="font-medium text-gray-700">{{ $product->product->product_name }}</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">{{ $product->warehouse->warehouse_name }}</td>
                        <td class="px-6 py-4">{{ $product->warehouse->address }}</td>
                        <td class="px-6 py-4">{{ $product->stock }}</td>
                        @if ($product->status == 'edited')
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                                    <span class="h-1.5 w-1.5 rounded-full bg-danger-600"></span>
                                    waiting for approval
                                </span>
                            </td>
                        @elseif($product->status == 'reject')
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                                    <span class="h-1.5 w-1.5 rounded-full bg-danger-600"></span>
                                    rejected
                                </span>
                            </td>
                        @elseif($product->status == 'editing')
                            @if ($product->locked_by == auth()->user()->id)
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                        editing for me
                                    </span>
                                </td>
                            @else
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                        editing
                                    </span>
                                </td>
                            @endif
                        @else
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                    <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                    aviable
                                </span>
                            </td>
                        @endif

                        {{-- <td>
                            @if ($product->prices->count() > 0)
                            <ul>
                                @foreach ($product->prices as $price)
                                    <li>${{ $price->sale_price }}</li>
                                @endforeach
                            </ul>
                        @else
                            No disponible
                        @endif
                        </td> --}}

                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-4">
                                @can('Editor')
                                    @if ($product->status != 'edited')
                                        @livewire('stock-edit', ['inventory' => $product], key($product->id))
                                    @endif
                                @endcan
                                @can('Teamleader')
                                    @if ($product->status == 'edited')
                                        @livewire('stock-approved', ['inventory' => $product], key($product->id))
                                    @endif
                                @endcan

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
