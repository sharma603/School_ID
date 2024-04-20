<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\School;

class SchoolController extends Controller
{
    public function school_save()
    {
         
        echo 'Hello';

        // Return the schools to a view
        // return view('schools.index', ['schools' => $schools]);
    }
}
