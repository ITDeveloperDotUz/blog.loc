<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Quote;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $quotes = Quote::all();
        return view('posts.index', compact(['posts', 'quotes']));
    }


    public function search($str, Request $request) {
        $results = Post::where('body', 'like', '%'.$request->input('fragment').'%')
            ->orWhere('title', 'like', '%'.$request->input('fragment').'%')->get();
        $fragment = $request->input('fragment');
        $quotes = Quote::paginate(5);
        return view('posts.search_results', compact(['results', 'quotes', 'fragment']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $post = Post::where('id', $id)->first();
        $nextPost = Post::where('id', $id+1)->first();
        $prevPost = Post::where('id', $id-1)->first();
        $quotes = Quote::all();

        $req = Request();

        if(session()->previousUrl() !== route('posts.show', $id)){
            $post->hits += 1;
            $post->save();
        }

        return view('posts.show', compact([
            'post',
            'quotes',
            'nextPost',
            'prevPost'
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
