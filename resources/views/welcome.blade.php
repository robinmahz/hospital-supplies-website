@include('hospital.components.info')
@extends('hospital.app')
@section('content')
    @include('hospital.components.scroller')

    <h2 class="text-center font-bold text-4xl mt-8">Our Products</h2>
    <div class="px-28 grid grid-cols-3 gap-8 rounded-xl mt-8">
        @each('hospital.components.card', $products, 'product')
    </div>
    <div class="flex justify-center">
        <a href="#" class=" border-blue-400 border-2 p-4 rounded-xl ">More Products</a>
    </div>

    <div class="text-center mt-24 px-24">
        <h2 class=" font-bold text-4xl mb-8">About Us</h2>
        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque numquam nihil est praesentium, facilis saepe.
        </div>
    </div>
    <div class="flex gap-8 justify-between px-28 my-8">
        <div class="basis-full rounded-3xl overflow-hidden"><iframe width="100%" height="315"
                src="https://www.youtube.com/embed/-0h0NOBfk_k?loop=1&autoplay=1">
            </iframe></div>
        <div class=" basis-full p-8 text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, eum
            tempore
            exercitationem
            voluptas dignissimos perspiciatis, recusandae soluta similique cum quidem eaque sequi ipsam quisquam alias,
            accusamus porro veniam consequuntur id!
            <div class="flex mt-4">
                <a href="#" class=" border-blue-400 border-2 p-4 rounded-xl ">Learn More</a>
            </div>
        </div>
    </div>

    <h2 class=" font-bold text-4xl text-center mt-24 px-24">Words From Our Clients</h2>
    @include('hospital.components.scroller')
    <div class="flex mt-4 justify-center">
        <a href="#" class=" border-blue-400 border-2 px-4  py-2 rounded-xl mb-8">Learn More</a>
    </div>
@endsection
