<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function index()
    {
        $posts = Post::with(['author', 'category'])->where('status','PUBLISHED')->paginate();
        return PostResource::collection($posts);
    }

    public function show($id)
    {
        $post = Post::with(['author', 'category'])->find($id);
        return new PostResource($post);
    }
}
