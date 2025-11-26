<!DOCTYPE html>
<html>
<head>
    <title>Random User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-xl shadow-md text-center">
        <img src="{{ $user['picture']['large'] }}" alt="User" class="mx-auto rounded-full shadow-md mb-4">
        <h1 class="text-2xl font-bold">{{ $user['name']['first'] }} {{ $user['name']['last'] }}</h1>
        <p class="text-gray-600">{{ $user['email'] }}</p>
        <p class="text-gray-500 mt-2">{{ $user['location']['city'] }}, {{ $user['location']['country'] }}</p>
        <a href="/" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Fetch Another</a>
    </div>
</body>
</html>
