<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body class="antialiased">
        @session('message')
            <div class="success-message">
                {{ session('message') }}
            </div>
        @endsession
        {{ $slot }}
        <!-- Подключение Bootstrap JS (для интерактивных компонентов, если нужно) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>