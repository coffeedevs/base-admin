<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CoffeeDevs Base Laravel Template</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @section('styles')
        @include('includes.admin.styles')
    @show
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper" id="app">
    @section('navbar')
        @include('includes.admin.navbar')
    @show

    <section class="content-wrapper">
        @section('sidebar')
            @include('includes.admin.sidebar')
        @show

        <section class="content">
            @yield('content')
        </section>

    </section>
    @section('footer')
        @include('includes.admin.footer')
    @show

    @section('scripts')
        @include('includes.admin.scripts')
    @show
</div>
</body>
</html>
