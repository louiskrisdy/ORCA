<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- Favicon --}}
<link rel="icon" type="image/x-icon" href="{{ asset('img/ORCA.ico') }}" />

{{-- Social Meta --}}
<x-social-meta title="Hello World" description="Blade components are awesome!" image="http://example.com/social.jpg" />

{{-- Title --}}
{{-- <title>{{ config('app.name', 'Forum') }}</title> --}}
<title>ORCA</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/choices.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Scripts -->
{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ mix('js/app.js') }}" defer></script>

{{-- Trix Editor --}}
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>





{{-- Livewire --}}
<livewire:styles />

{{-- Blade UI Kit --}}
@bukStyles(true)
