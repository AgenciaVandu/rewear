@extends('layouts.rewear-azul')
@section('content')
    @push('css')
        <link rel="stylesheet" href="{{ asset('/css/products.css') }}">
        <link rel="stylesheet" href="{{ asset('/lib/icomoon-v1.0/style.css') }}">
    @endpush
    @livewire('catalogue-filter')
    @push('js')
        <script src="{{ asset('/js/producto.js') }}"></script>
    @endpush
@endsection
