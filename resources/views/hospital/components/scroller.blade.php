<div class="m-auto relative w-full h-[600px]">
    <div class=" fade slide">
        <div class="text-black text-[15px] px-[8px] py-[12px] absolute w-full text-center">1 / 3</div>
        <img src="{{ asset('images/logo.png') }}" class="h-[600px] w-full">
    </div>
    <div class="hidden fade slide">
        <div class="text-black text-[15px] px-[8px] py-[12px] absolute w-full text-center">2 / 3</div>
        <img src="{{ asset('images/back.jpg') }}" class="h-[600px] w-full">
        {{-- <div class="text-md px-2 py-3 absolute bottom-2 w-full text-center">Caption there</div> --}}
    </div>
    <div class="hidden fade slide">
        <div class="text-black text-[15px] px-[8px] py-[12px] absolute w-full text-center">3 / 3</div>
        <img src="{{ asset('images/back.jpg') }}" class="h-[600px] w-full">
        {{-- <div class="text-md px-2 py-3 absolute bottom-2 w-full text-center">Caption there</div> --}}
    </div>
    <!-- Next and previous buttons -->
    <a class="cursor-pointer absolute top-1/2 w-auto mt-[-22px] p-16 text-black font-bold text-lg left-11"
        onclick="plusSlides(-1)">&#10094;</a>
    <a class="cursor-pointer absolute top-1/2 w-auto mt-[-22px] p-16 text-black font-bold text-lg right-11"
        onclick="plusSlides(1)">&#10095;</a>
</div>
<script src="{{ asset('js/slider.js') }}"></script>
