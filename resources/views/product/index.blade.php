    <x-app-layout>
        <x-slot name="header">
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Product') }}
                </h2>
                <div>
                    <a href="{{ route('product.create') }}"
                        class="bg-transparent hover:bg-neutral-500 text-neutral-700 font-semibold hover:text-white py-2 px-4 border border-neutral-500 hover:border-transparent rounded">
                        Add Product
                    </a>
                </div>
            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left border border-gray-200 shadow-md rounded-lg">
                                <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                                    <tr>
                                        <th class="px-6 py-3 border-b">#</th>
                                        <th class="px-6 py-3 border-b">Image</th>
                                        <th class="px-6 py-3 border-b">Name</th>
                                        <th class="px-6 py-3 border-b">Price</th>
                                        <th class="px-6 py-3 border-b">Stock</th>
                                        <th class="px-6 py-3 border-b">Description</th>
                                        <th class="px-6 py-3 border-b text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white hover:bg-gray-50">
                                        <td class="px-6 py-4 border-b">1</td>
                                        <td class="px-6 py-4 border-b"><img src=""></td>
                                        <td class="px-6 py-4 border-b">Q Mobile</td>
                                        <td class="px-6 py-4 border-b">5000</td>
                                        <td class="px-6 py-4 border-b">7</td>
                                        <td class="px-6 py-4 border-b">This is the product.</td>
                                        <td class="px-6 py-4 border-b">
                                            <div class="flex justify-center space-x-2">
                                                <button
                                                    class="bg-transparent hover:bg-sky-500 text-sky-700 hover:text-white font-semibold py-2 px-4 border border-sky-500 hover:border-transparent rounded">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button
                                                    class="bg-transparent hover:bg-neutral-500 text-neutral-700  hover:text-white py-2 px-4 border border-neutral-500 hover:border-transparent rounded">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <button
                                                    class="bg-transparent hover:bg-red-500 text-red-700 hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
