<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies Search</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-6 bg-gray-100">
    <div x-data="movieSearch()" class="max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Movies Search</h1>
        <p class="mb-2 text-gray-600">Search movies by title, genre, year, cast, or story.</p>
        <p class="mb-2 text-gray-600">In this demo we have 2 movies: Inception and The Dark Knight</p>
        <p class="mb-2 text-gray-400">Meilisearch installation for medium scale db</p>
        <input type="text" x-model="query" @input.debounce.500ms="search"
               placeholder="Search movies... e.g. gotham or joker"
               class="w-full p-2 border rounded mb-4">

        <template x-if="loading">
            <p class="text-gray-500">Searching...</p>
        </template>

        <div class="space-y-3">
            <template x-for="movie in results" :key="movie.id">
                <div class="p-3 bg-white rounded shadow">
                    <h2 class="font-bold text-lg" x-text="movie.title"></h2>
                    <p class="text-sm text-gray-600">
                        <span x-text="movie.genre"></span> |
                        <span x-text="movie.year"></span>
                    </p>
                    <p class="text-sm"><strong>Cast:</strong> <span x-text="movie.cast"></span></p>
                    <p class="text-gray-700" x-text="movie.story"></p>
                </div>
            </template>
        </div>
    </div>

    <script>
        function movieSearch() {
            return {
                query: '',
                results: [],
                loading: false,
                search() {
                    if (this.query.length < 2) {
                        this.results = [];
                        return;
                    }
                    this.loading = true;
                    fetch(`/search?q=${this.query}`)
                        .then(res => res.json())
                        .then(data => {
                            this.results = data;
                            this.loading = false;
                        });
                }
            }
        }
    </script>
</body>
</html>
