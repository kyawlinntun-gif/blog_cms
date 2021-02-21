<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Post::orderBy('created_at')->get();

        return view('store.main', [
            'posts' => $posts
        ]);
    }
}
