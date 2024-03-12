<?php

namespace AdminKit\EntryScreens\UI\Filament\Resources\EntryScreenResource\Pages;

use AdminKit\EntryScreens\UI\Filament\Resources\EntryScreenResource;
use Filament\Resources\Pages\CreateRecord;

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
