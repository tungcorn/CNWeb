<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;
Route::get('/', function () {
    return redirect()->route('issues.index');
});

Route::get('issues/search', [IssueController::class, 'search'])->name('issues.search');
Route::resource('issues', IssueController::class);


