<?php

namespace AdminKit\EntryScreens\UI\API\DTO;

use Spatie\LaravelData\Data;
use AdminKit\EntryScreens\Models\EntryScreen;

class EntryScreenDTO extends Data
{
    public function __construct(
        public string  $title,
        public string  $background,
        public ?string $subtitle,
    )
    {
    }

    public static function fromModel(EntryScreen $entryScreen): EntryScreenDTO
    {
        return new self(
            title: $entryScreen->title,
            background: $entryScreen->background,
            subtitle: $entryScreen->subtitle,
        );
    }
}
