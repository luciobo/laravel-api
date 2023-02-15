<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Redis;

class ProjectController extends Controller
{
    public function index() {
        $project = Project::paginate();
    
        return response()->json($project);
    }

    public function show(Project $project) {

        // $project = Project::findOrFail($id);
        // come il with() caricare i dati di queste relazioni,
        // dopo aver eseguito la query principale
        // qui andro a inserirer le 
        // $project->load("tipe");

        return response()->json($project);
    }
}
