<h2 class="text-center font-bold text-4xl mt-8">Our Products</h2>
<div class="px-28 grid grid-cols-3 gap-8 rounded-xl mt-8">
    @each('hospital.components.card', $products, 'product')
</div>
<div class="flex justify-center">
    <a href="#" class=" border-blue-400 border-2 p-4 rounded-xl ">More Products</a>
</div>
