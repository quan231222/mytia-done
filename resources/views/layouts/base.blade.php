<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-partials.header />
</head>

<body>

    <x-partials.nav />

    <x-ui.alerts />

    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    <x-partials.footer />

    @livewireScripts

    @bukScripts(true)
</body>

</html>