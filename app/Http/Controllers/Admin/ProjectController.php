<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function homeProjects()
    {
        $projects = Project::latest()->limit(3)->get();

        return response()->json($projects);
    }

    public function allProjects()
    {
        $projects = Project::all();

        return response()->json($projects);
    }

    public function projectDetails(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|integer',
        ]);
        $project = Project::find($validatedData['id']);

        if (!$project) {
            return response()->json(['message' => 'Invalid project ID'], 400);
        }

        return response()->json($project);
    }
}
