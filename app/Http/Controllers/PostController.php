<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatepostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->only(["create", "store"]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("post.index", ["posts" => post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("post.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new post([
            "title" => $request["title"],
            "content" => $request["content"],
            "author_id" => Auth::user()->id
        ]);
        $post->save();
        return redirect()->route("posts.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        return view("post.show", ["post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepostRequest $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
