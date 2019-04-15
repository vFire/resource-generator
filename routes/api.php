<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
 */
Route::any('/get-tables', \vFire\ResourceGenerator\Http\Controllers\ResourceGeneratorController::class.'@getTables');
Route::any('/get-columns', \vFire\ResourceGenerator\Http\Controllers\ResourceGeneratorController::class.'@getColumns');
Route::post('/check-file', \vFire\ResourceGenerator\Http\Controllers\ResourceGeneratorController::class.'@checkFile');
Route::post('/generate-resource', \vFire\ResourceGenerator\Http\Controllers\ResourceGeneratorController::class.'@generateFile');

Route::get('/settings-get', \vFire\ResourceGenerator\Http\Controllers\ResourceGeneratorOptionsController::class.'@getSettings');
Route::post('/settings-set', \vFire\ResourceGenerator\Http\Controllers\ResourceGeneratorOptionsController::class.'@setSettings');
Route::post('/settings-reset', \vFire\ResourceGenerator\Http\Controllers\ResourceGeneratorOptionsController::class.'@resetDefault');
