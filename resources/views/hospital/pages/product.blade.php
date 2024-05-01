@extends('hospital.app')
@section('content')
    <h1 class="text-center font-bold text-7xl my-10">Product Details</h1>
    <div class="bg-white mx-16 rounded-md p-6 grid grid-cols-2 mb-16 pr-10">
        <div class="">
            @include('hospital.components.productShow.carousel')
        </div>
        <div>
            <h3 class="font-bold text-4xl">{{ $product->name }}</h3>
            <span class="text-gray-700">{{ $product->category->name }}</span>
            <p class="mt-10 text-lg text-justify">{{ $product->description }}</p>
            <button type="submit" class="bg-blue-500 rounded-xl px-8 py-4 mt-8">Download Brochure</button>
        </div>
    </div>
@endsection
