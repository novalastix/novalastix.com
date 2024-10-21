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
        'response' => ['NOVALASTIX Corporation','Terminal Network AEON','Connected via ['.$_SERVER['SERVER_NAME'].']']
    ]);
});

Route::get('terminal/c/{command}', function ($query, Request $request) 
{
    if (isset($query))
    {
        $base64 = str_replace(['-', '_'], ['+', '/'], $query);
        
        //Decode command
        $command = base64_decode($base64);

        //$args = explode(" ",$command);
        $regex = <<<HERE
         /  "  ( (?:[^"\\\\]++|\\\\.)*+ ) \"
         | '  ( (?:[^'\\\\]++|\\\\.)*+ ) \'
         | \( ( [^)]*                  ) \)
         | [\s,]+
         /x
         HERE;

        $args = preg_split($regex, $command, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

        // return response()->json([
        //     'prompt' => "@guest>",
        //     'response' => $args
        // ]);

        if(strtolower($args[0]) == "help")
        {
            if (isset($args[1]))
            {
                return response()->json([
                    'prompt' => "@guest>",
                    'response' => ['There is no documentation for that command.']
                ]);
            }
            else
            {
                return response()->json([
                    'prompt' => "@guest>",
                    'response' => ['List of supported Terminal Commands:',"HELP - Displays this list of commands."]
                ]);
            }
        }
        return response()->json([
            'prompt' => "@guest>",
            'response' => ['\''.$args[0].'\' is not a recognized command.']
        ]);
    }
});