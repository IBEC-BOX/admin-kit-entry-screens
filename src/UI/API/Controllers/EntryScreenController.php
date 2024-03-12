<?php

declare(strict_types=1);

namespace AdminKit\EntryScreens\UI\API\Controllers;

use AdminKit\EntryScreens\Models\EntryScreen;

class EntryScreenController extends Controller
{
    public function index()
    {
        return EntryScreen::all();
    }

    public function show(int $id)
    {
        return EntryScreen::findOrFail($id);
    }
}
