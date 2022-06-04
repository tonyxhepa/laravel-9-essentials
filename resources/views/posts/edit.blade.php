<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update the post
        </h2>
    </x-slot:header>

    <div class="max-w-md mx-auto mt-12">
        <form class="bg-slate-200 m-4 p-4" method="POST" action="{{ route('posts.update', $post->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="m-2 p-2">
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title', $post->title) }}">
            </div>
            <div class="m-2 p-2">
                @error('title')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="m-2 p-2">
                <label>Image</label>
                <input type="file" name="image">
            </div>
            <div class="m-2 p-2">
                @error('image')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="m-2 p-2">
                <label>Body</label>
                <input type="text" name="body" value="{{ old('body', $post->body) }}">
            </div>
            <div class="m-2 p-2">
                @error('body')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="m-2 p-2">
                <label for="tags" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select
                    tags</label>
                <select id="tags" name="tags[]"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    multiple>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}" @selected($post->tags->contains($tag->id))>{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="m-2 p-2">
                <label>Published</label>
                <input type="checkbox" name="is_published" value="is_published" @checked(old('is_published', $post->is_published)) />
            </div>

            <div class="m-2 p-2">
                <button type="submit"
                    class="bg-indigo-500 hover:bg-indigo-700 text-white rounded m-2 p-2">Update</button>
            </div>
        </form>
    </div>
    <x-slot:footer>
        <div clas="mt-12">
            Footer
        </div>
    </x-slot:footer>
    </x-main-layout>
