<navbar class="flex justify-between pl-14 pr-20 bg-rich-black text-[#ffff]">
    <a href="/"><img src="{{ asset('images/logo.png') }}" alt="logo" class="w-20"></a href="/">
    <div class="flex gap-10 items-center">
        <a class="hover:text-[tomato]" href="/">Home</a>
        <a class="hover:text-[tomato]" href="/about">About</a>
        <div class="group cursor-pointer">
            <div class="group-hover:text-[tomato] flex gap-1 ">Shop <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
            <div class="hidden group-hover:block absolute bg-rich-black rounded-md">
                <ul class="grid gap-4 p-8">
                    @foreach ($categories as $category)
                        <li class="hover:text-[tomato]">{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="group cursor-pointer">
            <div class="group-hover:text-[tomato] flex gap-1 ">Gallery <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
            <div class="hidden group-hover:block absolute bg-rich-black p-4 rounded-md">
                <ul class="grid gap-4">
                    <li class="hover:text-[tomato]">Domestic</li>
                    <li class="hover:text-[tomato]">Internation</li>
                    <li class="hover:text-[tomato]">Blogs and article</li>
                </ul>
            </div>
        </div>
        <div class="group cursor-pointer">
            <div class="group-hover:text-[tomato] flex gap-1 ">Download <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
            <div class="hidden group-hover:block absolute bg-rich-black p-4 rounded-md">
                <ul class="grid gap-4">
                    <li class="hover:text-[tomato]">Catalougs</li>
                    <li class="hover:text-[tomato]">Certificates</li>
                </ul>
            </div>
        </div>
        <a class="hover:text-[tomato]" href="#">Contacts</a>
    </div>
</navbar>
