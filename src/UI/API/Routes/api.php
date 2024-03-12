<?php

use Illuminate\Support\Facades\Route;
use AdminKit\EntryScreens\UI\API\Controllers\EntryScreenController;

Route::get('/entry-screens', [EntryScreenController::class, 'index']);
Route::get('/entry-screens/{id}', [EntryScreenController::class, 'show']);
