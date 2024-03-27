<?php

namespace AdminKit\EntryScreens\UI\API\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapName;
use AdminKit\EntryScreens\Models\EntryScreen;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
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
            background: $entryScreen->background ?: $entryScreen->yt_link,
            subtitle: $entryScreen->subtitle,
        );
    }
}
