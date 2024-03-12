<?php

namespace AdminKit\EntryScreens\UI\Filament\Resources\EntryScreenResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use AdminKit\EntryScreens\UI\Filament\Resources\EntryScreenResource;

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
