<?php

namespace AdminKit\EntryScreens;

use AdminKit\EntryScreens\UI\Filament\Resources\EntryScreenResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-admin-kit-entry-screens';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            EntryScreenResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
