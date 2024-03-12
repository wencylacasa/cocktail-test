<!-- resources/views/cocktails/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Cocktails</h1>
        <ul class="space-y-4">
            @foreach ($cocktails as $cocktail)
                <li class="bg-white border border-gray-200 p-4">
                    <a href="{{ route('cocktails.show', $cocktail['idDrink']) }}" class="text-blue-500 font-semibold">
                        {{ $cocktail['strDrink'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
