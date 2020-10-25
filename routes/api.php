<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateTaskAction;
use App\Http\Controllers\GetTaskAction;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello', function(){
    $message = 'Hello';

    return response()->json([
        'message' => $message
    ]);
});

Route::post('/tasks', CreateTaskAction::class);

Route::get('/tasks/{id}', GetTaskAction::class)->where('id', '[0-9]+');