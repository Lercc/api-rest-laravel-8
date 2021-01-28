<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Tailwind css -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

       
    </head>
    <body class="bg-gray-100 text-gray-700">
        <div class="container mx-auto mt-9 px-4">
            <div class="grid grid-cols-3 my-10">
                @foreach ($posts as $post)
                <div class="bg-white hover:bg-blue-100 border border-gray-200 p-5">
                    <h2 class="font-bold text-lg mb-4">{{ $post->title }}</h2>
                    <h2 class="text-xs text-lg">{{ $post->excerpt }}</h2>
                    <h2 class="text-xs text-lg text-right">{{ $post->published_at }}</h2>
                </div>
                @endforeach
            </div>
            <div class="mb-4">
                {{ $posts->links() }}
            </div>
        </div>
    </body>
</html>
