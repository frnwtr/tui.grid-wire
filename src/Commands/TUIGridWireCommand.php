<?php

namespace Frnwtr\TUIGridWire\Commands;

use Illuminate\Console\Command;

class TUIGridWireCommand extends Command
{
    public $signature = 'tui-grid-wire';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
