@include('hospital.components.info')
@extends('hospital.app')
@section('content')
    @include('hospital.components.scroller')

    @include('hospital.components.welcome.products')

    @include('hospital.components.welcome.about')

    @include('hospital.components.welcome.wordFromClient')
@endsection
