<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101'); 
});

route::get('/se', function() {
    return view('template.default');
});
