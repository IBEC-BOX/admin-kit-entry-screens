<?php

use AdminKit\EntryScreens\UI\API\Controllers\EntryScreenController;
use Illuminate\Support\Facades\Route;

Route::get('/entry-screens', [EntryScreenController::class, 'index']);
Route::get('/entry-screens/{id}', [EntryScreenController::class, 'show']);
