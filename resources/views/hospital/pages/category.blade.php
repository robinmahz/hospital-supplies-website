@extends('hospital.app')
@section('content')
    <div class="h-[25rem] relative bg-center" style="background-image: url({{ $category->image }})">
        <div class="text-7xl font-bold text-[#fff] bottom-16 px-20 py-5 absolute w-full"
            style="background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);">
            {{ $category->name }}</div>
    </div>
    <div class="my-24 px-28 grid grid-cols-3 gap-16">
        @each('hospital.components.productShow.card', $product, 'product')
    </div>
@endsection
