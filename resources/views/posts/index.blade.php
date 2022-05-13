<x-main-layout>
    <x-slot:header>
        Navigation with slot
    </x-slot:header>

    <x-card class="bg-indigo-200">
        @forelse ($posts as $post)
            <x-post-card :post="$post" />
        @empty
            <p>No posts</p>
        @endforelse
    </x-card>
    <x-slot:footer>
        <div clas="mt-12">
            Footer
        </div>
    </x-slot:footer>
</x-main-layout>
