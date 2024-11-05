<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('pages.home', ['posts' => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $userPost = $request->validate([
            'title' => ['required', 'max:255'],
            'body' => ['required', 'max:255'],
        ]);

        Auth::user()->posts()->create($userPost);

        return back()->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('pages.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $userPost = $request->validate([
            'title' => ['required', 'max:255'],
            'body' => ['required', 'max:255'],
        ]);

        $post->update($userPost);

        return redirect()->route('dashboard')->with('updated', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        $post->delete();
        return back()->with([
            'delete' => 'Deleted successfully'
        ]);

    }
}
