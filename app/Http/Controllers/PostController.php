<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAll() {
        $post = Post::with('writer:id,username')->get();

        return PostResource::collection($post);
    }
}
