<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <link href="/css/app.css" rel="stylesheet">

        @livewireStyles
    </head>
    <body class="antialiased" x-data="{}">

        <button @click="Livewire.emit('openModal', 'demo')">Open Modal</button>
        <button @click="Livewire.emit('openModal', 'another-demo')">Open Another Modal</button>

        @livewire('livewire-ui-modal')

        @livewireScripts

        <script src="/js/app.js"></script>
    </body>
</html>
