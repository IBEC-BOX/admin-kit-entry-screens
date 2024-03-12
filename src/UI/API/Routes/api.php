<?php

use AdminKit\EntryScreens\UI\API\Controllers\EntryScreenController;
use Illuminate\Support\Facades\Route;

Route::get('/entry-screen', [EntryScreenController::class, 'showFirst']);
