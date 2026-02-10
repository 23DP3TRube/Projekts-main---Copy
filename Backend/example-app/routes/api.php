<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/home', function (Request $request) {
    return response()->json([
        'title' => 'Gamemate',
        'message' => 'Sveiki no Gamemate API!',
        'data' => [
            'version' => '1.0',
            'status' => 'active',
            'features' => ['chat', 'games', 'stats']
        ]
    ])->header('Access-Control-Allow-Origin', '*')
      ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
      ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization')
      ->header('Access-Control-Allow-Credentials', 'true');
});
