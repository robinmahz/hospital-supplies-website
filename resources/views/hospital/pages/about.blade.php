@extends('hospital.app')
@section('content')
    <div class="mx-32 my-16">
        <div class="flex justify-center"><iframe width="75%" height="500"
                src="https://www.youtube.com/embed/-0h0NOBfk_k?loop=1&autoplay=1">
            </iframe>
        </div>
        @include('hospital.components.about_components.aboutUs')
        @include('hospital.components.about_components.managementTeam')
    </div>
@endsection
