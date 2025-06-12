<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users', function (Request $request) {
    return response()->json([
        'message' => 'This is a protected route, accessible only to authenticated users.',
        'user' => $request->user(),
    ]);
});