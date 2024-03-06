@extends('hospital.admin.layout.app')
@section('content')
    <h1 class="text-white text-4xl text-center mb-4">Products</h1>
    <hr>
    <div class="mt-6">
        <a href="/product/create"
            class="text-white text-3xl rounded-lg bg-[#374151] px-4 py-2 text-center w-32 hover:text-pumpkin">Add
            Product</a>
        <table class="w-full text-sm text-left rtl:text-right mt-4 text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        S.N
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ ++$key }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $product->created_at->format('Y/m/d') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->category->name ?? 'null' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->description }}
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="/product/{{ $product->id }}/edit">Edit</a>
                            <span>| </span>
                            <a href="/product/{{ $product->id }}">Show</a>
                            <span>| </span>
                            <form action="/product/{{ $product->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $products->links() }}
        </div>
    </div>
@endsection
