<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Models\School;

class FolderController extends Controller
{
    public function index(Folder $folder)
    {
        $folders=$folder->get();
        //return view('folders.index')->with(['posts' => $category->getByCategory(), 'folder_name' => $folder->name]);
        return view('folders.index')->with(['allfolder'=>$folders]);
    }
    public function create(School $school)
    {
    return view('folders.create')->with(['schools' => $school->get()]);
    }
    public function store(Request $request, Folder $folder)
    {
        $input = $request['folder'];
        $folder->fill($input)->save();
        return redirect('/folder/' . $folder->id);
    }
}