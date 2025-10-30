<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Admin Dashboard</title>
</head>
<body class="antialiased bg-gray-50 dark:bg-gray-900">
    <x-admin.navbar />
    <x-admin.sidebar />

    <main class="p-4 md:ml-64 h-auto pt-20">
        <x-admin.header>{{ $judul }}</x-admin.header>
        {{ $slot }}
    </main>
</body>
</html>
