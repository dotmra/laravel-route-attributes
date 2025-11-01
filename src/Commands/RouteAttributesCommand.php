<?php

namespace Dotmra\RouteAttributes\Commands;

use Illuminate\Console\Command;

class RouteAttributesCommand extends Command
{
    public $signature = 'laravel-route-attributes';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
