@extends('hospital.admin.layout.showLayout')

@section('content')
    <div class="grid justify-center">
        <h1 class="text-center text-4xl pb-8">Products</h1>
        <div class="bg-white rounded-3xl text-black grid justify-center p-8">
            <h2 class="text-2xl font-bold">{{ $product->name }}</h2>
            <div class="flex gap-4 my-8">
                @foreach ($product->productGalleries as $image)
                    <div class="grid gap-4">
                        <div class="h-auto max-w-40 rounded-2xl overflow-hidden">
                            <img src="{{ $image->image }}" alt="">
                        </div>
                        <form action="/productgallery/{{ $image->id }}" method="POST">
                            @csrf
                            @method('Delete')
                            <button type="submit"
                                class="font-bold rounded-md bg-[#1F2937] text-[#ffff] text-center px-2">Delete</button>
                        </form>
                    </div>
                @endforeach
            </div>
            <div class="font-bold text-md mb-4">
                Added Date: {{ $product->created_at->format('Y/m/d') }}<br>
                Category: {{ $product->category->name }}<br>
                Description: {{ $product->description }}
            </div>
            <a href="/product/{{ $product->id }}/edit"
                class="font-bold rounded-md bg-[#1F2937] text-[#ffff] text-center max-w-16">Edit</a>
        </div>
    </div>
@endsection
