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
                    'query' => $args,
                    'response' => ['There is no documentation for that command.']
                ]);
            }
            else
            {
                return response()->json([
                    'query' => $args,
                    'response' => ['List of supported Terminal Commands:',"CLEAR - Clears the terminal.","HELP - Displays this list of commands."]
                ]);
            }
        }
        else if(strtolower($args[0]) == "clear")
        {
            return response()->json([
                'query' => $args,
                'function' => 'clear'
            ]);
        }
        else if(strtolower($args[0]) == "trm")
        {
            if (isset($args[1]))
            {
                if(strtolower($args[1]) == "debug")
                {
                    return response()->json([
                        'query' => $args,
                        'response' => ['Terminal Variable \'DEBUG\' Toggled.'],
                        'function' => 'debug'
                    ]);
                }
            }
        }


        return response()->json([
            'query' => $args,
            'response' => ['\''.$args[0].'\' is not a recognized command.']
        ]);
    }
});