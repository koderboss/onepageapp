@extends('layout.app');

@section('content')
    @include('components.hero')

    {{-- Company details --}}
    @include('components.about-company')
@endsection
