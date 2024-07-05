@extends('layout.app');



{{-- Main contents --}}
@section('content')

    {{-- hero section --}}
    @include('components.hero')

    {{-- how we do section --}}
    @include('components.how-do-we-do')

    {{-- pricing section --}}
    @include('components.pricing')

    {{-- team section --}}
    @include('components.team')

    {{-- newsletter section --}}
    @include('components.newsletter')

@endsection