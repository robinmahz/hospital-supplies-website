<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ config('app.name') }}</title>
</head>

<body class="bg-gray-900">
    <div class="flex justify-between">
        <sidebar class="bg-gun-metal text-white py-10 h-screen">
            <div class="text-3xl mb-4 px-8">Latest Added</div>
            <hr>
            <div class="mt-6 px-8">
                <table class="w-full text-sm text-left rtl:text-right mt-4 text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                S.N
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            if (isset($products)) {
                                $items = $products;
                            } else {
                                $items = $categories;
                            }
                        @endphp
                        @foreach ($items as $key => $item)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ ++$key }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->name }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </sidebar>
        <div class="py-10">
            @yield('content')
        </div>
        <navbar class="bg-gun-metal text-white py-10 h-screen">
            @include('hospital.admin.layout.navbar')
        </navbar>
    </div>
</body>

</html>
