<div class=" grid justify-center rounded-xl">
    <div class="rounded-xl overflow-hidden border-2 "><img src="{{ asset('images/logo.png') }}" alt="">
    </div>
    <div class="text-center my-8 px-8">
        <h3 class=" font-bold text-2xl">{{ $product->name }}</h3>
        <div class="mt-2 text-gray-600">{{ $product->description }}</div>
    </div>
</div>
