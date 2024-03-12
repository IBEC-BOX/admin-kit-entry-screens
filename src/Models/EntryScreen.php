<?php

namespace AdminKit\EntryScreens\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Casts\Attribute;
use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AdminKit\EntryScreens\Database\Factories\EntryScreenFactory;

/**
 * @property-read string $title
 * @property-read string $background
 * @property-read ?string $subtitle
 */
class EntryScreen extends AbstractModel implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;

    protected $table = 'admin_kit_entry_screens';

    protected $fillable = [
        'title',
        'subtitle',
    ];

    protected array $translatable = [
        'title',
        'subtitle',
    ];

    public function background(): Attribute
    {
        return new Attribute(
            get: fn () => $this->getFirstMediaUrl(),
        );
    }

    protected static function newFactory(): EntryScreenFactory
    {
        return new EntryScreenFactory();
    }
}
