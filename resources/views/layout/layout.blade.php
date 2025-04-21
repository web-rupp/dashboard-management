<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!-- CDN Flowbits-->
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  <!-- CDN Tailwinds-->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <!-- CSS -->
</head>
<body>
  <!-- Navbar -->
  @include('components.navbar.navbar')
  <!-- Main -->
  <main class="container max-w-screen-xl m-auto">
    @yield('content')
  </main>
  <!-- Footer -->
  <!-- @include('components.footer.footer') -->
  <!-- CDN Javascript Tailwind -->
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>