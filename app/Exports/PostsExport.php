<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Post;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


// class PostsExport implements FromCollection
class PostsExport implements FromView
{
    // public function collection()
    // {
    //     return Post::paginate(10);
    // }

    public function view(): View
    {
        return view('exports.posts', ['posts' => Post::paginate(10)]);
    }
}
