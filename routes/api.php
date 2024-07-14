<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('terminal/handshake', function (Request $request) 
{
    return response()->json([
        'prompt' => "@guest>",
        'response' => ['AEON COMMAND TERMINAL']
    ]);
});

Route::get('terminal/c/{command}', function ($command, Request $request) 
{
    if (isset($command))
    {
        return response()->json([
            'prompt' => "@guest>",
            'response' => ['Command \''.$command.'\' not found.']
        ]);
    }
});