<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CinéMax </title>
    <script src="https://cdn.tailwindcss.com"></script>
        @yield('contentcss')
</head>

<body>

 <!-- Navigation -->
        @include('layouts.nav')
      <!-- Product Section -->

   <section id="cinema" class="cinema-alma">
        @yield('content')
    </section>
     <!-- Footer -->
  @include('layouts.footer')

</body>

</html>
