<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Base Laravel Template</title>
    <meta name="description" content="CoffeeDevs Base Laravel template with Admin">
    <meta name="author" content="CoffeeDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    @section('styles')
        @include('includes.web.styles')
    @show
</head>
<body>
<div>
    @section('header')
        @include('includes.web.header')
    @show

    @yield('content')

    @section('footer')
        @include('includes.web.footer')
    @show
</div>
@section('scripts')
    @include('includes.web.scripts')
@show
</body>
</html>