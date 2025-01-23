<?php

namespace App\Http\Controllers;

use App\Models\Project; // Import the Project model
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Show the details of a project.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $project = Project::find($id); 
        if (!$project) {
            return redirect()->route('home.index')->with('error', 'Project not found');
        }

        return view('project-details', compact('project'));
    }
}
