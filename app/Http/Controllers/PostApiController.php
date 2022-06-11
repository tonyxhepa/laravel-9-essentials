<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Http\Resources\TagResource;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function index()
    {
        $posts = Post::with('tags')->get();

        return PostResource::collection($posts);
    }

    public function show($id)
    {
        $post = Post::with('tags')->findOrFail($id);

        return new PostResource($post);
    }

    public function tagIndex()
    {
        $tags = Tag::with('posts')->get();

        return TagResource::collection($tags);
    }

    public function tagShow($id)
    {
        $tag = Tag::with('posts')->findOrFail($id);

        return new TagResource($tag);
    }
}
