<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('includes.common.vendor-styles')
</head>
<body class="dashboard-background">
<main>
    @include('includes.common.header')
    <div class="container py-4 py-md-5">
        @yield('content')
    </div>
</main>
@yield('modals')
@include('includes.common.vendor-scripts')
@yield('custom-scripts')
</body>
</html>