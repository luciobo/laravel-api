<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ProjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// sarà raggiungibile tramite /api/posts
Route::get("/projects", [ProjectController::class, "index"]);

// sarà raggiungibile tramite /api/posts/4
Route::get("/projects/{project}", [ProjectController::class, "show"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
