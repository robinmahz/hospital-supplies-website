@extends('hospital.admin.layout.showLayout')
@section('content')
    <div class="grid justify-center">
        <h1 class="text-center text-4xl pb-8">Categories</h1>
        <div class="bg-white rounded-3xl text-black grid justify-center p-8">
            <h2 class="text-2xl font-bold">{{ $category->name }}</h2>
            <span class="text-sm ">
                {{ $category->created_at->format('Y/m/d') }}
            </span>
            <div class="grid gap-4 my-8">
                <div class="h-auto max-w-sm rounded-3xl overflow-hidden">
                    <img src="{{ $category->image }}" alt="">
                </div>
                <form action="/category/{{ $category->id }}" method="POST">
                    @csrf
                    @method('Delete')
                    <button type="submit"
                        class="font-bold rounded-md bg-[#1F2937] text-[#ffff] text-center px-2 ">Delete</button>
                </form>
            </div>
            <a href="/product/{{ $category->id }}/edit"
                class="font-bold rounded-md bg-[#1F2937] text-[#ffff] text-center max-w-16">Edit</a>
        </div>
    </div>
@endsection
