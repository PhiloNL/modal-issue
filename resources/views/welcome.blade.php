<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="w-full h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <link href="/css/app.css" rel="stylesheet">

        @livewireStyles
    </head>
    <body class="antialiased flex items-center justify-center min-h-screen space-x-5" x-data="{}">

        <button @click="Livewire.emit('openModal', 'demo')" class="inline-flex items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Open Modal</button>
        <button @click="Livewire.emit('openModal', 'another-demo')" class="inline-flex items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Open Another Modal</button>

        @livewire('livewire-ui-modal')

        @livewireScripts

        <script src="/js/app.js"></script>
    </body>
</html>
