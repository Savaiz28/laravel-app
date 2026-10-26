<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/db-check', function () {
    try {
        \Illuminate\Support\Facades\DB::connection()->getPdo();
        return 'Connected to database: ' . \Illuminate\Support\Facades\DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return response('DB error: ' . $e->getMessage(), 500);
    }
});
