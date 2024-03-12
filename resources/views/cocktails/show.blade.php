<!-- resources/views/cocktails/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">{{ $cocktail['strDrink'] }}</h1>
        <div class="flex justify-between items-start mt-5">
            <div class="w-1/2">
                <img src="{{ $cocktail['strDrinkThumb'] }}" alt="{{ $cocktail['strDrink'] }}" class="max-w-full h-auto">
            </div>
            <div class="w-1/2">
                <p>{{ $cocktail['strInstructions'] }}</p>
            </div>
        </div>
    </div>
@endsection