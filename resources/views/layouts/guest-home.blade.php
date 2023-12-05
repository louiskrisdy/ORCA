<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-partials.head />
</head>

<body class="bg-gray-100">

    {{-- Header --}}
    <header class="relative flex items-center justify-center h-40 w-100">
        <img class="absolute z-10 object-cover w-full h-40" src="{{ asset('img/bg/Banner2.png') }}" alt="">
        <h2 id="typewriter" class="z-50 text-4xl font-bold text-white tracking-widest">Welcome to ORCA</h2>
    </header>

    <x-partials.nav />

    {{-- Slot --}}
    <div class="mb-8 font-sans antialiased text-gray-900" style="height: 64vh;">
        {{ $slot }}
    </div>

    {{-- Footer --}}
    <x-partials.footer />

    {{-- Blade UI Kit --}}
    {{-- @bukScripts(true) --}}

    {{-- Livewire --}}
    <livewire:scripts />
    
    <script>
        const welcomeORCAElement = document.getElementById('typewriter');
        const welcomeORCAText = welcomeORCAElement.textContent;
        let currentCharIndex = 0;
        let isTypingForward = true; // Flag to indicate the direction of the animation

        const typewriteText = () => {
            if (isTypingForward) {
                if (currentCharIndex < welcomeORCAText.length) {
                    welcomeORCAElement.textContent = welcomeORCAText.substring(0, currentCharIndex + 1);
                    currentCharIndex++;
                    setTimeout(typewriteText, 100);
                } else {
                    // Reached the end of the text, reverse the direction
                    isTypingForward = false;
                    currentCharIndex = welcomeORCAText.length - 1;
                    setTimeout(typewriteText, 1000); // Wait for 1 second before typing in reverse
                }
            } else {
                if (currentCharIndex >= 0) {
                    welcomeORCAElement.textContent = welcomeORCAText.substring(0, currentCharIndex);
                    currentCharIndex--;
                    setTimeout(typewriteText, 100);
                } else {
                    // Reached the beginning of the text, reverse the direction again
                    isTypingForward = true;
                    currentCharIndex = 0;
                    setTimeout(typewriteText, 1000); // Wait for 1 second before typing forward
                }
            }
        };

        typewriteText();

    </script>

</body>

</html>
