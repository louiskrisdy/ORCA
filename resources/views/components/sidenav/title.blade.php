@php
$classes = 'mt-4 uppercase font-semibold text-sm';
@endphp

<div>
    <h2 {{ $attributes->merge(['class' => $classes], ['style' => 'color: #283044;']) }}>
        {{ $slot }}
    </h2>
</div>
