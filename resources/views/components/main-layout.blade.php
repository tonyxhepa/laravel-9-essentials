<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <div class="max-w-6xl mx-auto mb-8">
        @if (session()->has('status'))
            <div class="text-green-800 m-2 p-4 bg-green-200">{{ session()->get('status') }}</div>
        @endif
        <div class="m2 p-2">
            <ul class="flex">
                <li class="m-2 p-2 bg-indigo-200"><a href="{{ route('posts.index') }}">Posts</a></li>
                <li class="m-2 p-2 bg-indigo-200"><a href="{{ route('posts.create') }}">New Post</a></li>
            </ul>
        </div>
        {{ $header }}
    </div>
    {{ $slot }}
    <div class="max-w-6xl mx-auto">
        {{ $footer }}
    </div>
</body>

</html>
