<x-app-layout>
    <div class="flex justify-between">
        <div class="bg-gun-metal text-white py-10 h-screen">@include('hospital.admin.layout.navbar')</div>
        <div>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>
        </div>
    </div>
</x-app-layout>
