<?php

namespace AdminKit\EntryScreens\Commands;

use Illuminate\Console\Command;

class EntryScreensCommand extends Command
{
    public $signature = 'admin-kit-entry-screens';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
