<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div x-data="{ open: false }">
            <button @click="open = !open">Toggle</button>
            <div x-show="open">
                <p>Hello, Alpine.js!</p>
            </div>
        </div>
    </body>
</html>
