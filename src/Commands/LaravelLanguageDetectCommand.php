<?php

namespace Krishzzi\LaravelLanguageDetect\Commands;

use Illuminate\Console\Command;

class LaravelLanguageDetectCommand extends Command
{
    public $signature = 'laravel-language-detect';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
