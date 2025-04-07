<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white text-center p-4">
        <h1>Book List</h1>
    </header>

    <main class="container mx-auto mt-4">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center p-3 mt-4">
        &copy; 2025 Book Store
    </footer>
</body>
</html>
