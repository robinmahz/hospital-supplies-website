<div class="relative w-[80%] h-[500px] overflow-hidden bg-center">
    @foreach ($product->productGalleries as $key => $item)
        <div class=" @if ($key != 0) hidden @endif fade slide">
            <img src="{{ $item->image }}" alt="" class="h-[600px] w-full">
        </div>
    @endforeach
    <a class="cursor-pointer absolute top-1/2 w-auto text-black font-bold text-lg left-8"
        onclick="plusSlides(-1)">&#10094;</a>
    <a class="cursor-pointer absolute top-1/2 w-auto text-black font-bold text-lg right-8"
        onclick="plusSlides(1)">&#10095;</a>
</div>
<script src="{{ asset('js/slider.js') }}"></script>
