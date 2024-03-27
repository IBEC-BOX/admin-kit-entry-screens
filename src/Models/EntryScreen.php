<?php

namespace AdminKit\EntryScreens\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\EntryScreens\Database\Factories\EntryScreenFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

/**
 * @property-read string $title
 * @property-read string $background
 * @property-read ?string $subtitle
 * @property-read ?string $yt_link
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
        'yt_link',
    ];

    protected array $translatable = [
        'title',
        'subtitle',
    ];

    public function ytLink(): Attribute
    {
        return new Attribute(
            get: fn ($value) => Str::of($value)
                ->replace('watch?v=', 'embed/')
        );
    }

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
