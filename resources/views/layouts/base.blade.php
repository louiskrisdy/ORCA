<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-partials.head />
</head>

<body class="relative overflow-hidden" style="background-image: url('{{ asset('img/bg/Background.png') }}'); background-repeat: no-repeat; background-size: cover;">

    <div class="absolute z-10 w-full">
        {{-- <img src="{{ asset('img/bg/Background.png') }}" alt="" class="object-cover w-full max-h-screen"> --}}
    </div>


    {{-- Slot --}}
    <div class="relative z-50 mb-8 font-sans antialiased text-gray-900">
        {{ $slot }}
    </div>

    <livewire:scripts />
    @bukScripts(true)
</body>

</html>
