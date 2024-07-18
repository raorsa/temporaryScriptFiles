<?php

use Illuminate\Support\Facades\Route;

Route::get(config('temporary-script-files.path') . '/{id}.js', function (string $id) {
    $script = new \Raorsa\TemporaryScriptFiles\TemporaryScriptFiles();
    return response($script->getScriptFile($id))->header('Content-Type', 'application/javascript');

})->name('temporary-script-files.getScriptFile');
