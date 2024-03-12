<?php

use Illuminate\Support\Facades\Route;
use AdminKit\EntryScreens\UI\API\Controllers\EntryScreenController;

Route::get('/entry-screen', [EntryScreenController::class, 'showFirst']);
