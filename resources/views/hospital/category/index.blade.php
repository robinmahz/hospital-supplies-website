@extends('hospital.admin.layout.app')
@section('content')
    <a href="/category/create" class="text-white text-3xl">Add category</a>
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
                    Category Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Parent Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $category)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">
                        {{ ++$key }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $category->created_at->format('Y/m/d') }}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $category->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $category->parent->name ?? 'null' }}
                    </td>
                    <td class="px-6 py-4 flex gap-2">
                        <a href="/category/{{ $category->id }}/edit">Edit</a>
                        <span>| </span>
                        <form action="/category/{{ $category->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
