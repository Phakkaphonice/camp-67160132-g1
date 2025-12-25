<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('html101');
// });

route::get('/se', function() {
    return view('template.default');
});

route::get('/mycontroller',[App\Http\Controllers\MyController::class,'index']);

route::get('/',[App\Http\Controllers\MyController::class,'html101']);
route::post('/',[App\Http\Controllers\MyController::class,'show']);

route::get('/calculate',[App\Http\Controllers\MyController::class,'inFo']);
route::post('/calculate',[App\Http\Controllers\MyController::class,'calculate']);
