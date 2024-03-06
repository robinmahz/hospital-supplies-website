@extends('hospital.admin.layout.app')
@section('content')
    <div class="flex gap-4 flex-wrap px-28 justify-center">
        @foreach ($product->productGalleries as $item)
            <div class="h-auto max-w-36 ">
                <div class="rounded-xl overflow-hidden">
                    <img src="{{ $item->image }}" alt="">
                </div>
                <form action="/productgallery/{{ $item->id }}" method="POST" class="ml-16 mt-4">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
    <form action="/product/{{ $product->id }}" method="POST" class="max-w-sm mx-auto mt-12" enctype="multipart/form-data">
        @csrf
        @method('Patch')
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Product
                Name</label>
            <input type="text" id="" name="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required value="{{ $product->name }}" />
        </div>
        <div class="mb-5">
            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                Category Type</label>
            <select id="" name="category_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $product->category->id ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="images">Upload file</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                type="file" name="images[]" multiple accept="image/png, image/jpg, image/jpeg">
        </div>
        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Description</label>
            <textarea id="description" rows="4" name="description" required
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $product->description }}</textarea>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
@endsection
