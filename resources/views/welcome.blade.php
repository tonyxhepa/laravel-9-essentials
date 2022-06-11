<x-guest-layout>
    <div class="max-w-7xl mx-auto mt-8">
        <h1>Welcome</h1>
        <div class="grid grid-cols-2 gap-4">
            @forelse ($posts as $post)
                <div
                    class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('/storage/' . $post->image) }}" alt="">
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $post->title }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->body }}.</p>
                        <div class="flex flex-wrap p-2">
                            @foreach ($post->tags as $tag)
                                <span class="text-sm font-semibold text-blue-400 m-2 p-2">
                                    {{ $tag->name }}
                                </span>
                            @endforeach
                        </div>
                        <a href="#"
                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @empty
                <h2>No Posts</h2>
            @endforelse
        </div>
    </div>
</x-guest-layout>
