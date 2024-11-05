@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Liste des Restaurants</h1>

        <!-- Liste des restaurants -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($restaurants as $restaurant)
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-xl font-semibold">{{ $restaurant->name }}</h2>
                    <p class="text-gray-600">{{ $restaurant->address }}</p>
                    <p class="text-gray-500">{{ $restaurant->description }}</p>

                    <div class="mt-4">
                        <a href="{{ route('restaurants.show', $restaurant->id) }}" class="text-blue-500 hover:text-blue-700">Voir les détails</a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Formulaire pour ajouter un restaurant -->
        <div class="mt-8">
            <h2 class="text-xl font-bold mb-4">Ajouter un Nouveau Restaurant</h2>

            <form action="{{ route('restaurants.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nom du Restaurant</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>

                <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
