<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Routing\Controller as BaseController;
class Controller extends BaseController
{
    /**
     * Fetch projects and return the index view.
     */
    public function index()
    {
        $projects = Project::all();
        return view('index', compact('projects'));
    }
}
