<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;


use App\Exports\PostsExport;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::latest('id')->paginate();
        return PostResource::collection($post);
    }

    public function show(Post $post)
    {
        // return response()->json(new PostResource($post)); //no devuelve 'data'
        return new PostResource($post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response(null, 204);
    }

    public function descarga()
    {
        return Excel::download(new PostsExport, 'publicaciones.xlsx');
    }
}
