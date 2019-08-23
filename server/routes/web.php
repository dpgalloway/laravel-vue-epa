<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Default to vue-router for routing needs, unless Laravel API is called
Route::any('{path?}', function () {
    return view('index');
})
->where('path', '^((?!api).)*$');
