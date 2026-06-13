<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title' , 'Shopme')</title>
    <meta name="description" content="@yield('meta_description' , 'Shopme')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8F8F8] ">
    @include('partials.user-header')
  
    @include('partials.user-sidebar')
      <main>
        @yield('content')
    </main>
    
</body>
</html>