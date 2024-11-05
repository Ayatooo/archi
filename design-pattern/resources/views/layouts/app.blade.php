<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de Restaurants</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<div class="min-h-screen flex flex-col">
    <header class="bg-indigo-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-lg font-bold">Application de Restaurants</h1>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-indigo-600 text-white p-4 text-center">
        <p>&copy; 2024 Mon Application de Restaurants</p>
    </footer>
</div>
</body>
</html>
