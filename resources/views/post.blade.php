<!DOCTYPE html>
<html>
<head>
    <title>Daftar Post</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8 max-w-5xl">
        <h1 class="text-4xl font-bold text-center mb-8 text-gray-800">{{ setting('site.title') }}</h1>
        <h3 class="text-xl font-semibold text-center mb-8 text-gray-800">{{ setting('site.description') }}</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($all as $item)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <img src="{{ Storage::url($item->image) }}" alt="image"
                         class="w-full h-64 object-cover object-center">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3 hover:text-blue-600">
                            {{ $item->title }}
                        </h2>
                        <div class="prose prose-sm text-gray-600 mb-4">
                            {!! $item->body !!}
                        </div>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $item->created_at->format('d M Y') }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
