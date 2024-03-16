<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

class FolderController extends Controller
{
    public function index(Folder $folder)
    {
        return view('folders.index')->with(['posts' => $category->getByCategory(), 'folder_name' => $folder->name]);
    }
}