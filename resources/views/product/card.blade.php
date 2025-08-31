    <x-app-layout>
        <x-slot name="header">
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Orders') }}
                </h2>
                <div>
                    <a href="{{ route('product.create') }}"
                        class="bg-transparent hover:bg-neutral-500 text-neutral-700 font-semibold hover:text-white py-2 px-4 border border-neutral-500 hover:border-transparent rounded">
                        Add orders
                    </a>
                </div>
            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="overflow-x-auto">
                            @if (session('success'))
                                <div class="p-4 mb-4 text-sm text-green-700 bg-white border border-green-300 rounded-lg shadow-sm"
                                    role="alert">
                                    <span class="font-medium">{{ session('success') }}</span>
                                </div>
                            @endif
                            <table class="w-full text-sm text-left border border-gray-200 shadow-md rounded-lg">
                                <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                                    <tr>
                                        <th class="px-6 py-3 border-b">#</th>
                                        <th class="px-6 py-3 border-b">Image</th>
                                        <th class="px-6 py-3 border-b">Name</th>
                                        <th class="px-6 py-3 border-b">Price</th>
                                        <th class="px-6 py-3 border-b">Stock</th>
                                        <th class="px-6 py-3 border-b">Status</th>
                                        <th class="px-6 py-3 border-b">Total Price</th>
                                        <th class="px-6 py-3 border-b">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($orders as $order)
                                        <tr class="bg-white hover:bg-gray-50">
                                            <td class="px-6 py-4 border-b">{{ $i++ }}</td>
                                            <td class="px-6 py-4 border-b"><img
                                                    src="{{ asset('images/' . $order->product->image) }}" width="70px"
                                                    height="70px"></td>
                                            <td class="px-6 py-4 border-b">{{ $order->product->name }}</td>
                                            <td class="px-6 py-4 border-b">{{ $order->product->price }}</td>
                                            <td class="px-6 py-4 border-b">{{ $order->quantity }}</td>
                                            <td class="px-6 py-4 border-b">{{ $order->status }}</td>
                                            <td class="px-6 py-4 border-b">
                                                {{ number_format($order->quantity * $order->product->price, 2, '.', ',') }}
                                            </td>
                                            <td class="px-6 py-4 border-b">
                                                <form action="{{ route('order.destroy', $order->id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button
                                                        class="bg-transparent hover:bg-red-500 text-red-700 hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <form action="" class="flex items-end gap-4 mt-4">
                                <div class="flex-1">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Total
                                        Price</label>
                                    <input type="text" name="name" id="name" value="{{ $total_price }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Enter product name" required readonly>
                                </div>
                                <div class="col-2">
                                    <button
                                        class="bg-transparent hover:bg-neutral-500 text-neutral-700 font-semibold hover:text-white py-2 px-4 border border-neutral-500 hover:border-transparent rounded">
                                        Payment Card
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
