<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;
Route::get('/', function () {
    return redirect()->route('issues.index');
});

Route::resource('issues', IssueController::class);


