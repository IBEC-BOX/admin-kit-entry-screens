<?php

declare(strict_types=1);

namespace AdminKit\EntryScreens\UI\API\Controllers;

use AdminKit\EntryScreens\Models\EntryScreen;
use AdminKit\EntryScreens\UI\API\DTO\EntryScreenDTO;

class EntryScreenController extends Controller
{
    public function showFirst(): EntryScreenDTO
    {
        $entryScreen = EntryScreen::query()
            ->firstOrFail();

        return EntryScreenDTO::from($entryScreen);
    }
}
