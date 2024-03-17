<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

class FolderController extends Controller
{
    public function index(Folder $folder)
    {
        $folders=$folder->get();
        //return view('folders.index')->with(['posts' => $category->getByCategory(), 'folder_name' => $folder->name]);
        return view('folders.index')->with(['allfolder'=>$folders]);
    }
}