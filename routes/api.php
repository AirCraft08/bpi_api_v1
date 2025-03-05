<?php

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Relevee;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/utilisateurs', function (Request $request) {
    $users = User::all();
    return response()->json(['users' => $users]);
});

Route::get('/articles', function (Request $request) {
    $articles = Article::all();
    return response()->json(['articles' => $articles]);
});

Route::get('/relevees', function (Request $request) {
    $historiqueTemp = Relevee::all();
    return response()->json(['relevees' => $historiqueTemp]);
});
