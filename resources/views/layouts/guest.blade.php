<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-partials.head />
</head>

<body class="bg-gray-100">

    {{-- Header
    <header class="relative flex items-center justify-center h-40 w-100">
        <img class="absolute z-10 object-cover w-full h-40" src="{{ asset('img/bg/Banner2.png') }}" alt="">
        <h2 class="z-50 text-4xl font-bold text-white tracking-widest">ORCA</h2>
    </header> --}}

    {{-- Navbar --}}
    <x-partials.nav />

    {{-- Slot --}}
    <x-buttons.scrollToTop />
    <div class="mb-8 font-sans antialiased text-gray-900">
        {{ $slot }}
    </div>

    {{-- Footer --}}
    <x-partials.footer />

    {{-- Blade UI Kit --}}
    {{-- @bukScripts(true) --}}

    {{-- Livewire --}}
    <livewire:scripts />

</body>

</html>
