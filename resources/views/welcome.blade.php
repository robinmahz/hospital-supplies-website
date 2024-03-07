@include('hospital.components.info')
@extends('hospital.app')
@section('content')
    @include('hospital.components.scroller')
    <div>
        @include('hospital.components.card')
    </div>
@endsection
