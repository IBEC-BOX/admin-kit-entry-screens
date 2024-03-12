<?php

namespace AdminKit\EntryScreens\UI\Filament\Resources\EntryScreenResource\Pages;

use AdminKit\EntryScreens\UI\Filament\Resources\EntryScreenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEntryScreen extends EditRecord
{
    protected static string $resource = EntryScreenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
