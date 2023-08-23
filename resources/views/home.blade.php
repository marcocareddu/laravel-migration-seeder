@extends('layouts.main')

{{-- Title
@section('title', 'Home') --}}

{{-- Main --}}
@section('main')
    <h1>Titolo di prova</h1>

    @foreach ($trains as $train)
        <h1>{{ $train->company }}</h1>
    @endforeach
@endsection
