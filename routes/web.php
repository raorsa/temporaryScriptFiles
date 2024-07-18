<?php

use Illuminate\Support\Facades\Route;

Route::get(config('temporary-script-files.path') . '/{id}.js', 'TemporaryScriptFilesController@getScriptFile')->name('temporary-script-files.getScriptFile');