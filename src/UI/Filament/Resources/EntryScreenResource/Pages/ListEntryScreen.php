<?php

namespace AdminKit\EntryScreens\UI\Filament\Resources\EntryScreenResource\Pages;

use AdminKit\EntryScreens\UI\Filament\Resources\EntryScreenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEntryScreen extends ListRecords
{
    protected static string $resource = EntryScreenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
