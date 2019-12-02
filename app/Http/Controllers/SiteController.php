<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;
use App\Post;
use App\User;



class SiteController extends Controller
{
    public function index(){
        $post = new Post;
        $topPosts = $post->getPopular(4);
        $admin = User::where('id', 1)->first();
        $quotes = Quote::all();
        $posts = Post::getFeatured();
        return view('index', compact([
            'quotes',
            'posts',
            'admin',
            'topPosts'
        ]));
    }



}
