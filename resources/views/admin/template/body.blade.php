<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seoTitle ?? 'gopizza — admin' }}</title>
    <meta name="description" content="{{ $seoDescription ?? 'gopizza admin dashboard' }}">
    <meta name="robots" content="noindex,nofollow">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- You might link your CSS files here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

