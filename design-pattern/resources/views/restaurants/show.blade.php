@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">{{ $restaurant->name }}</h1>
            <p class="text-gray-600 mb-4">{{ $restaurant->address }}</p>
            <p class="text-gray-500 mb-6">{{ $restaurant->description }}</p>

            <a href="{{ route('restaurants.index') }}" class="text-blue-500 hover:text-blue-700">Retour à la liste</a>
        </div>
    </div>
@endsection

