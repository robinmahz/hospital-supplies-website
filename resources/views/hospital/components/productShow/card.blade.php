<a href="/shop/{{ $product->category->name }}/{{ $product->slug }}">
    <div class=" grid justify-center rounded-xl">
        <div class="rounded-xl overflow-hidden border-2 "><img src="{{ $product->productGalleries->first->image->image }}"
                alt="">
        </div>
        <div class="text-center my-8 px-8">
            <h3 class=" font-bold text-2xl">{{ $product->name }}</h3>
            <div class="mt-2 text-gray-600 max-h-[10ch] overflow-hidden text-ellipsis">{{ $product->description }}</div>
        </div>
    </div>
</a>
