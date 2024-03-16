<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function index(School $School)
    {
        return view('schools.index')->with(['folders' => $school->getByCategory(), 'school_name' => $school->name]);
    }
}