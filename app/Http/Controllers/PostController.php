<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('insert');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $post = new Post;
       $post->name = $request->name;
       $post->email = $request->get('email');
       $post->password = $request->input('password');
       $post->save();

    //    echo "Data inserted successfully";
    return redirect('show');


    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $posts=Post::all();
        return view('show', ['posts'=>$posts]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $posts = Post::find($id);
        return view('edit', ['posts'=>$posts]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $posts = Post::find($id);
        $posts->name = $request->name;
        $posts->email = $request->get('email');
        $posts->password = $request->input('password');
        $posts->save();

        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $post = Post::find($id)->delete();
        return redirect('show');
    }
}
