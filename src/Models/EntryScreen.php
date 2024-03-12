<?php

namespace AdminKit\EntryScreens\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\EntryScreens\Database\Factories\EntryScreenFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class EntryScreen extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_entry_screens';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): EntryScreenFactory
    {
        return new EntryScreenFactory();
    }
}
