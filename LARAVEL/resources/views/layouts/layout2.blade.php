<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <title>{{ env("APP_NAME") }} | @yield('title')</title>

   
</head>

<body>
    
    <!-- Header Start -->
    {{-- @include('partials.header') --}}
    <!-- Header End -->

    <!-- Content Start -->
    @yield('contents')
    <!-- Content End -->

    <!-- Footer Start -->
    {{-- @include('partials.footer') --}}
    <!-- Footer End -->

</body>

</html>