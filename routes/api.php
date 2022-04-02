<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/~/antares-cse/antares-id/postman-1',[\App\Http\Controllers\WrapperController::class,'retrieve'])->name('retrieve')
    ->middleware(\App\Http\middleware\Npmmiddleware::class)
    ->name('identitas');                                            
Route::get('/~/antares-cse/antares-id/postman-1',[\App\Http\Controllers\WrapperController::class,'discover'])->name('discover')
    ->middleware(\App\Http\middleware\Npmmiddleware::class)
    ->name('identitas');                                                                 
Route::get('/~/antares-cse/antares-id/postman-1',[\App\Http\Controllers\WrapperController::class,'latest'])->name('latest')
    ->middleware(\App\Http\middleware\Npmmiddleware::class)
    ->name('identitas');
Route::get('/user/identitas', function (){
    return [
        'code' => 0,
        'data' => [
            'npm' =>'197006082',
            'nama' => 'Nadia Rachmasari Biduri',
            'email' => '197006082@student.unsil.ac.id'
        ]
        ];
})
->middleware(\App\Http\middleware\Npmmiddleware::class)
->name('identitas');

