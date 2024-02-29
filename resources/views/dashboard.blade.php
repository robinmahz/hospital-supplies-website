<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="px-20">
        <a href="/category" class="text-white">Catagory</a>
        <a href="/product" class="text-white">Product</a>
    </div>
</x-app-layout>
