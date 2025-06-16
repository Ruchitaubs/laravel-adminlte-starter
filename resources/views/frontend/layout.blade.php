<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'MySite')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased">
  <header class="bg-white shadow">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-blue-600">MySite</h1>
      <nav class="space-x-4">
        <a href="#" class="hover:text-blue-500">Home</a>
        <a href="{{ route('search') }}" class="hover:text-blue-500">Search</a>
        @auth
          <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="hover:text-blue-500">Logout</button>
          </form>
        @else
          <a href="{{ route('login') }}" class="hover:text-blue-500">Login</a>
          <a href="{{ route('register') }}" class="hover:text-blue-500">Register</a>
        @endauth
      </nav>
    </div>
  </header>

  <main class="mt-6">
    @yield('content')
  </main>

  <footer class="bg-white mt-12 py-6">
    <div class="container mx-auto px-6 text-center text-gray-600 text-sm">
      © {{ date('Y') }} MySite. All rights reserved.
    </div>
  </footer>
</body>
</html>
