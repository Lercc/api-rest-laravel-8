<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Exports\PostsExport;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(9);
        return view('index', compact('posts'));
    }
    public function descarga()
    {
        return Excel::download(new PostsExport, 'publicaciones.xlsx');
    }
}
