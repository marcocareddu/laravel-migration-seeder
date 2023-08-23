@extends('layouts.main')

{{-- Title
@section('title', 'Home') --}}

{{-- Main --}}
@section('main')
    <div class="container">
        <h1 class="text-center mb-4">Orari Treni</h1>

        <h1></h1>



        {{-- Table --}}

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Compagnia</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Partenza</th>
                    <th scope="col">Arrivo</th>
                    <th scope="col">Ora partenza</th>
                    <th scope="col">Ora arrivo</th>
                    <th scope="col">Carrozze</th>
                    <th scope="col">Ritardo</th>
                </tr>
            </thead>

            {{-- Table inject here --}}
            @foreach ($trains as $train)
                <tbody>
                    <tr>
                        <th>{{ $train->company }}</th>
                        <th>{{ $train->train_number }}</th>
                        <th>{{ $train->departure_st }}</th>
                        <th>{{ $train->arrival_st }}</th>
                        <th>{{ $train->dep_hour }}</th>
                        <th>{{ $train->arr_hour }}</th>
                        <th>{{ $train->carriages }}</th>
                        <th>{{ $train->delay }}</th>
                    </tr>
                </tbody>
            @endforeach
        </table>

    </div>
@endsection
