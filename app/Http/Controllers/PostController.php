<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Folder;

class PostController extends Controller
{
    public function index(Folder $folder)
    {
        $posts=$folder->posts()->get();
        $folderId=$folder->id;
        return view('posts/index')->with(['posts'=>$posts,'folderId'=>$folderId]);
    }

    public function create($folderId)
    {
        return view('posts/create')->with(['folderId'=>$folderId]);
    }

    public function store(Post $post, Request $request, Folder $folder)
    {
        $input = $request['post'];
        $post->folder_id=$folder->id;
        $post->fill($input)->save();
        return redirect('/folder/' . $folder->id);
    }

    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }

}
