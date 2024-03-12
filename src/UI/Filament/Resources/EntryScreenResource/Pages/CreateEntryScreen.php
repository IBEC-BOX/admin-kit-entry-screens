<?php

namespace AdminKit\EntryScreens\UI\Filament\Resources\EntryScreenResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use AdminKit\EntryScreens\UI\Filament\Resources\EntryScreenResource;

class CreateEntryScreen extends CreateRecord
{
    protected static string $resource = EntryScreenResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }

    protected function getRedirectUrl(): string
    {
        return EntryScreenResource::getUrl();
    }
}
